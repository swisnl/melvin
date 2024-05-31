<?php

declare(strict_types=1);

namespace Swis\Melvin\Tests\Integration;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Swis\Melvin\Client;
use Swis\Melvin\Enums\AreaType;
use Swis\Melvin\Models\Area;
use Swis\Melvin\SituationFilterParameters;

class SituationsTest extends TestCase
{
    private Client $client;

    public static function setUpBeforeClass(): void
    {
        if (!getenv('MELVIN_USERNAME') || !getenv('MELVIN_PASSWORD')) {
            self::markTestSkipped('Missing Melvin credentials.');
        }
    }

    /**
     * @param int $areaId
     */
    #[DataProvider('areaIdProvider')]
    public function testSituations(int $areaId): void
    {
        $params = (new SituationFilterParameters())
            ->setIncludeDetours(true)
            ->setAreaIds([$areaId]);

        $situations = $this->client()->situations()->export($params);

        $this->assertNotEmpty($situations);
    }

    public function areaIdProvider(): \Generator
    {
        $areas = array_filter(
            $this->client()->areas()->all(),
            static fn (Area $area) => $area->type->equals(AreaType::PROVINCE())
        );

        foreach ($areas as $area) {
            yield $area->name => [$area->id];
        }
    }

    private function client(): Client
    {
        if (!isset($this->client)) {
            $this->client = Client::create(getenv('MELVIN_USERNAME'), getenv('MELVIN_PASSWORD'));
        }

        return $this->client;
    }
}
