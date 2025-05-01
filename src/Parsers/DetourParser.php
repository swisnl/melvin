<?php

declare(strict_types=1);

namespace Swis\Melvin\Parsers;

use Swis\Melvin\Enums\BoatType;
use Swis\Melvin\Enums\Direction;
use Swis\Melvin\Enums\TransportMode;
use Swis\Melvin\Enums\VehicleType;
use Swis\Melvin\Models\Detour;

class DetourParser
{
    public function __construct(protected GeometryParser $geometryParser)
    {
    }

    public function parse(\stdClass $object, int $index): Detour
    {
        return new Detour(
            $object->id,
            str_contains($object->properties->type, '_EXTERNAL'),
            $this->geometryParser->parse($object->geometry),
            ($object->properties->name ?? '') ?: sprintf('Omleiding %d', $index + 1),
            Direction::from($object->properties->direction),
            !empty($object->properties->transportMode) ? TransportMode::from($object->properties->transportMode) : null,
            array_map([VehicleType::class, 'from'], $object->properties->vehicleTypes ?? []),
            array_map([BoatType::class, 'from'], $object->properties->boatTypes ?? [])
        );
    }
}
