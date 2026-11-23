<?php

declare(strict_types=1);

namespace Swis\Melvin\Tests\Parsers;

use PHPUnit\Framework\TestCase;
use Swis\Melvin\Enums\VehicleTypeSpecification;
use Swis\Melvin\Parsers\DetourParser;
use Swis\Melvin\Parsers\GeometryParser;

final class DetourParserTest extends TestCase
{
    public function testParseVehicleTypeSpecification(): void
    {
        $detour = (new DetourParser(new GeometryParser()))->parse($this->detour(['vehicleTypeSpecification' => 'ALL_FOR_THIS_ROADTYPE']), 0);

        $this->assertSame(VehicleTypeSpecification::AllForThisRoadType, $detour->vehicleTypeSpecification);
    }

    public function testParseWithoutVehicleTypeSpecification(): void
    {
        $detour = (new DetourParser(new GeometryParser()))->parse($this->detour([]), 0);

        $this->assertNull($detour->vehicleTypeSpecification);
    }

    private function detour(array $properties): \stdClass
    {
        return (object) [
            'id' => '1',
            'geometry' => null,
            'properties' => (object) array_merge([
                'type' => 'DETOUR',
                'direction' => 'BOTH',
            ], $properties),
        ];
    }
}
