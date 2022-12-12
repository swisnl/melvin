<?php

declare(strict_types=1);

namespace Swis\Melvin\Exceptions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class RequestException extends \RuntimeException implements Exception
{
    private RequestInterface $request;

    private ?ResponseInterface $response;

    public function __construct(
        string $message,
        RequestInterface $request,
        ResponseInterface $response = null,
        \Throwable $previous = null
    ) {
        $code = $response ? $response->getStatusCode() : 0;
        parent::__construct($message, $code, $previous);
        $this->request = $request;
        $this->response = $response;
    }

    public static function create(
        RequestInterface $request,
        ResponseInterface $response = null,
        \Throwable $previous = null
    ): self {
        if (!$response) {
            return new self(
                'Error completing request',
                $request,
                null,
                $previous
            );
        }

        $message = sprintf(
            '`%s %s` resulted in a `%s %s` response',
            $request->getMethod(),
            $request->getUri(),
            $response->getStatusCode(),
            $response->getReasonPhrase()
        );

        return new self($message, $request, $response, $previous);
    }

    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
