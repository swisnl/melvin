<?php

declare(strict_types=1);

namespace Swis\Melvin\Tests;

use PHPUnit\Framework\TestCase;
use Swis\Melvin\Client;
use Swis\Melvin\SituationFilterParameters;

class ExampleTest extends TestCase
{
    public function testAreas()
    {
        $client = Client::create(getenv('MELVIN_USERNAME'), getenv('MELVIN_PASSWORD'));

        $this->assertTrue(true);
        var_dump($client->areas()->all());
    }

    public function testSituations()
    {
        $client = Client::create(getenv('MELVIN_USERNAME'), getenv('MELVIN_PASSWORD'));

        $this->assertTrue(true);
        $params = (new SituationFilterParameters())
            ->setIncludeDetours(true)
            ->setAreaIds([443]);

        var_dump($client->situations()->export($params)[0]);
    }
}
