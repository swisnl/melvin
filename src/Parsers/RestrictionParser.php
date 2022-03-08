<?php

declare(strict_types=1);

namespace Swis\Melvin\Parsers;

use stdClass;
use Swis\Melvin\Enums\Direction;
use Swis\Melvin\Enums\RestrictionType;
use Swis\Melvin\Enums\RoadManagementType;
use Swis\Melvin\Enums\TransportMode;
use Swis\Melvin\Enums\VehicleType;
use Swis\Melvin\Models\LaneInformation;
use Swis\Melvin\Models\Restriction;
use Swis\Melvin\Models\RestrictionExtraInfo;
use Swis\Melvin\Models\VehicleInformation;

class RestrictionParser
{
    protected GeometryParser $geometryParser;

    public function __construct(GeometryParser $geometryParser)
    {
        $this->geometryParser = $geometryParser;
    }

    public function parse(stdClass $object, int $index): Restriction
    {
        if ($emergencyServices = $object->properties->emergencyServices ?? $object->properties->emergency ?? null) {
            $emergencyServices = $this->parseExtraInfo($emergencyServices);
        }

        if ($publicTransport = $object->properties->publicTransport ?? null) {
            $publicTransport = $this->parseExtraInfo($publicTransport);
        }

        if ($laneInformation = $object->properties->laneInformation ?? null) {
            $laneInformation = new LaneInformation(
                $laneInformation->numberOfLanesRestricted,
                $laneInformation->numberOfOperationalLanes,
                $laneInformation->originalNumberOfLanes
            );
        }

        // N.B. vehicleInformation is often an empty object when unknown
        if ($vehicleInformation = (array) ($object->properties->vehicleInformation ?? []) ? $object->properties->vehicleInformation : null) {
            $vehicleInformation = new VehicleInformation(
                $vehicleInformation->heightCharacteristic ?? null,
                $vehicleInformation->lengthCharacteristic ?? null
            );
        }

        return new Restriction(
            $object->id,
            str_contains($object->properties->type, '_EXTERNAL'),
            $object->geometry ? $this->geometryParser->parse($object->geometry) : null,
            ($object->properties->name ?? '') ?: sprintf('Beperking %d', $index + 1),
            Direction::from($object->properties->direction),
            property_exists($object->properties, 'transportMode') ? TransportMode::from($object->properties->transportMode) : null,
            RestrictionType::from($object->properties->restrictionType),
            array_map([VehicleType::class, 'from'], $object->properties->vehicleTypes ?? $object->properties->vehicles ?? []),
            $emergencyServices,
            $publicTransport,
            $object->properties->maximumSpeed ?? null,
            $laneInformation,
            $vehicleInformation,
            property_exists($object->properties, 'roadManagementTypes')
                ? array_map([RoadManagementType::class, 'from'], $object->properties->roadManagementTypes)
                : null,
            ($object->properties->roadManagementType ?? null) ? RoadManagementType::from($object->properties->roadManagementType) : null
        );
    }

    protected function parseExtraInfo(stdClass $object): RestrictionExtraInfo
    {
        $passageAllowed = $object->passageAllowed ?? null;

        if ($passageAllowed === 'true' || $passageAllowed === 'YES') {
            $passageAllowed = true;
        } elseif ($passageAllowed === 'false' || $passageAllowed === 'NO') {
            $passageAllowed = false;
        } else {
            $passageAllowed = null;
        }

        return new RestrictionExtraInfo(
            $passageAllowed,
            $object->description ?? ''
        );
    }
}
