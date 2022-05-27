<?php

declare(strict_types=1);

namespace Swis\Melvin\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
use Swis\Http\Fixture\Client as FixtureClient;
use Swis\Http\Fixture\ResponseBuilder;
use Swis\Melvin\Client;
use Swis\Melvin\HttpClient;

abstract class TestCase extends BaseTestCase
{
    protected function getClient(): Client
    {
        $httpClient = new FixtureClient(
            (new ResponseBuilder(__DIR__.'/_fixtures'))->setStrictMode(true)
        );

        return new Client(new HttpClient('foo', 'bar', 'client-id', $httpClient));
    }
}
