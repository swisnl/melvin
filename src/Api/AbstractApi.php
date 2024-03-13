<?php

declare(strict_types=1);

namespace Swis\Melvin\Api;

use Swis\Melvin\Client;
use Swis\Melvin\HttpClient;

abstract class AbstractApi
{
    public function __construct(protected Client $client)
    {
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
