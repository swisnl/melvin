<?php

declare(strict_types=1);

namespace Swis\Melvin;

use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Swis\Melvin\Exceptions\AuthenticationException;
use Swis\Melvin\Exceptions\RequestException;

class HttpClient
{
    private string $baseUrl = 'https://melvin.ndw.nu/melvinservice/rest/';

    private string $tokenUrl = 'https://keycloak.ndwcloud.nu/auth/realms/ndw/protocol/openid-connect/token';

    private string $username;

    private string $password;

    private string $clientId;

    private string $token;

    protected ClientInterface $httpClient;

    protected RequestFactoryInterface $requestFactory;

    protected StreamFactoryInterface $streamFactory;

    public function __construct(
        string $username,
        string $password,
        string $clientId = 'melvin-frontend-test',
        ?ClientInterface $httpClient = null,
        ?RequestFactoryInterface $requestFactory = null,
        ?StreamFactoryInterface $streamFactory = null
    ) {
        $this->authenticate($username, $password, $clientId);
        $this->httpClient = $httpClient ?: Psr18ClientDiscovery::find();
        $this->requestFactory = $requestFactory ?: Psr17FactoryDiscovery::findRequestFactory();
        $this->streamFactory = $streamFactory ?: Psr17FactoryDiscovery::findStreamFactory();
    }

    /**
     * @param mixed|null $body
     *
     * @throws \JsonException
     * @throws \Swis\Melvin\Exceptions\AuthenticationException
     * @throws \Swis\Melvin\Exceptions\RequestException
     *
     * @return mixed
     */
    public function request(string $method, string $uri, $body = null)
    {
        $request = $this->createRequest($method, $uri, $body)
            ->withHeader('Authorization', sprintf('Bearer %s', $this->getToken()));

        return $this->sendRequest($request);
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $clientId
     *
     * @return $this
     */
    public function authenticate(string $username, string $password, string $clientId = 'melvin-frontend-test'): self
    {
        $this->username = $username;
        $this->password = $password;
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @param string $baseUrl
     *
     * @return $this
     */
    public function setBaseUrl(string $baseUrl): self
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * @param string $tokenUrl
     *
     * @return $this
     */
    public function setTokenUrl(string $tokenUrl): self
    {
        $this->tokenUrl = $tokenUrl;

        return $this;
    }

    /**
     * @param mixed|null $body
     *
     * @throws \JsonException
     */
    protected function createRequest(string $method, string $uri, $body = null): RequestInterface
    {
        $request = $this->requestFactory->createRequest($method, $this->baseUrl.ltrim($uri, '/'))
            ->withHeader('Accept', 'application/json');

        if ($body !== null) {
            $request = $request->withBody($this->streamFactory->createStream(json_encode($body, JSON_THROW_ON_ERROR)))
                ->withHeader('Content-Type', 'application/json');
        }

        return $request;
    }

    /**
     * @throws \JsonException
     * @throws \Swis\Melvin\Exceptions\RequestException
     *
     * @return mixed
     */
    protected function sendRequest(RequestInterface $request)
    {
        try {
            $response = $this->httpClient->sendRequest($request);
        } catch (ClientExceptionInterface $exception) {
            throw RequestException::create($request, null, $exception);
        }

        if ($response->getStatusCode() !== 200) {
            throw RequestException::create($request, $response);
        }

        $responseBody = (string) $response->getBody();

        return json_decode($responseBody, false, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * @throws \JsonException
     * @throws \Swis\Melvin\Exceptions\AuthenticationException
     * @throws \Swis\Melvin\Exceptions\RequestException
     */
    protected function getToken(): string
    {
        if (!isset($this->token)) {
            $this->token = $this->fetchToken();
        }

        return $this->token;
    }

    /**
     * @throws \JsonException
     * @throws \Swis\Melvin\Exceptions\AuthenticationException
     * @throws \Swis\Melvin\Exceptions\RequestException
     */
    protected function fetchToken(): string
    {
        $body = [
            'client_id' => $this->clientId,
            'grant_type' => 'password',
            'username' => $this->username,
            'password' => $this->password,
        ];
        $request = $this->requestFactory->createRequest('POST', $this->tokenUrl)
            ->withHeader('Content-Type', 'application/x-www-form-urlencoded')
            ->withBody($this->streamFactory->createStream(http_build_query($body)));

        try {
            $result = $this->sendRequest($request);
        } catch (RequestException $exception) {
            throw new AuthenticationException('Failed to authenticate', 0, $exception);
        }

        return $result->access_token;
    }
}
