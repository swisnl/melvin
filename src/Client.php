<?php

declare(strict_types=1);

namespace Swis\Melvin;

use Swis\Melvin\Api\Areas;
use Swis\Melvin\Api\Situations;

class Client
{
    public function __construct(protected HttpClient $httpClient)
    {
    }

    public static function create(string $username, string $password, string $clientId = 'melvin-frontend-test'): self
    {
        return new self(new HttpClient($username, $password, $clientId));
    }

    public function getHttpClient(): HttpClient
    {
        return $this->httpClient;
    }

    public function areas(): Areas
    {
        return new Areas($this);
    }

    public function situations(): Situations
    {
        return new Situations($this);
    }
}
