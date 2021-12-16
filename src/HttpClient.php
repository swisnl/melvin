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

    private string $username;

    private string $password;

    private string $token;

    protected ClientInterface $httpClient;

    protected RequestFactoryInterface $requestFactory;

    protected StreamFactoryInterface $streamFactory;

    public function __construct(
        string $username,
        string $password,
        ?ClientInterface $httpClient = null,
        ?RequestFactoryInterface $requestFactory = null,
        ?StreamFactoryInterface $streamFactory = null
    ) {
        $this->authenticate($username, $password);
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
            ->withHeader('melvin-user-token', $this->getToken());

        return $this->sendRequest($request);
    }

    /**
     * @param string $username
     * @param string $password
     *
     * @return $this
     */
    public function authenticate(string $username, string $password): self
    {
        $this->username = $username;
        $this->password = $password;

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
     * @param mixed|null $body
     *
     * @throws \JsonException
     */
    protected function createRequest(string $method, string $uri, $body = null): RequestInterface
    {
        $request = $this->requestFactory->createRequest($method, $this->baseUrl.ltrim($uri, '/'));

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
        $request = $this->createRequest(
            'POST',
            'authenticate/login',
            ['username' => $this->username, 'password' => $this->password]
        );
        $result = $this->sendRequest($request);

        if ($result->result !== 'SUCCESS') {
            throw new AuthenticationException('Failed to authenticate');
        }

        return $result->userToken;
    }
}
