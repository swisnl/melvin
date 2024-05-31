<?php

declare(strict_types=1);

namespace Swis\Melvin\Tests\Api;

use Swis\Melvin\Tests\TestCase;

final class AreasTest extends TestCase
{
    public function testAll(): void
    {
        $client = $this->getClient();

        $areas = $client->areas()->all();

        $this->assertNotEmpty($areas);
    }
}
