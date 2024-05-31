<?php

declare(strict_types=1);

namespace Swis\Melvin\Tests\Integration;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Swis\Melvin\Client;
use Swis\Melvin\Enums\AreaType;
use Swis\Melvin\Models\Area;
use Swis\Melvin\SituationFilterParameters;

final class SituationsTest extends TestCase
{
    private static Client $client;

    #[DataProvider('areaIdProvider')]
    public function testSituations(int $areaId): void
    {
        if (!getenv('MELVIN_USERNAME') || !getenv('MELVIN_PASSWORD')) {
            self::markTestSkipped('Missing Melvin credentials.');
        }

        $params = (new SituationFilterParameters())
            ->setIncludeDetours(true)
            ->setAreaIds([$areaId]);

        $situations = self::client()->situations()->export($params);

        $this->assertNotEmpty($situations);
    }

    public static function areaIdProvider(): \Generator
    {
        if (!getenv('MELVIN_USERNAME') || !getenv('MELVIN_PASSWORD')) {
            yield 'skipped' => [0];

            return;
        }

        $areas = array_filter(
            self::client()->areas()->all(),
            static fn (Area $area) => $area->type->equals(AreaType::PROVINCE())
        );

        foreach ($areas as $area) {
            yield $area->name => [$area->id];
        }
    }

    private static function client(): Client
    {
        self::$client ??= Client::create(getenv('MELVIN_USERNAME'), getenv('MELVIN_PASSWORD'));

        return self::$client;
    }
}
