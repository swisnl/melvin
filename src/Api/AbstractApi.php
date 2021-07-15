<?php

declare(strict_types=1);

namespace Swis\Melvin\Api;

use Swis\Melvin\Client;
use Swis\Melvin\HttpClient;

abstract class AbstractApi
{
    protected Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function getClient(): Client
    {
        return $this->client;
    }

    protected function getHttpClient(): HttpClient
    {
        return $this->getClient()->getHttpClient();
    }
}
