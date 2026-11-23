<?php

declare(strict_types=1);

namespace Swis\Melvin\Tests\Parsers;

use PHPUnit\Framework\TestCase;
use Swis\Melvin\Enums\VehicleTypeSpecification;
use Swis\Melvin\Parsers\GeometryParser;
use Swis\Melvin\Parsers\RestrictionParser;

final class RestrictionParserTest extends TestCase
{
    public function testParseVehicleTypeSpecification(): void
    {
        $restriction = (new RestrictionParser(new GeometryParser()))->parse($this->restriction(['vehicleTypeSpecification' => 'SPECIFIED']), 0);

        $this->assertSame(VehicleTypeSpecification::Specified, $restriction->vehicleTypeSpecification);
    }

    public function testParseWithoutVehicleTypeSpecification(): void
    {
        $restriction = (new RestrictionParser(new GeometryParser()))->parse($this->restriction([]), 0);

        $this->assertNull($restriction->vehicleTypeSpecification);
    }

    private function restriction(array $properties): \stdClass
    {
        return (object) [
            'id' => '1',
            'geometry' => null,
            'properties' => (object) array_merge([
                'type' => 'RESTRICTION',
                'direction' => 'BOTH',
                'restrictionType' => 'COMPLETE',
            ], $properties),
        ];
    }
}
