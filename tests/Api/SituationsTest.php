<?php

declare(strict_types=1);

namespace Swis\Melvin\Tests\Api;

use Swis\Melvin\Tests\TestCase;

class SituationsTest extends TestCase
{
    public function testExport(): void
    {
        $client = $this->getClient();

        $situations = $client->situations()->export();

        $this->assertNotEmpty($situations);
    }
}
