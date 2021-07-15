<?php

declare(strict_types=1);

namespace Swis\Melvin;

use Swis\Melvin\Api\Areas;
use Swis\Melvin\Api\Situations;

class Client
{
    protected HttpClient $httpClient;

    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public static function create(string $username, string $password): self
    {
        return new self(new HttpClient($username, $password));
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
