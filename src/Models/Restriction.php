<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

use GeoJson\Geometry\Geometry;
use Swis\Melvin\Enums\Direction;
use Swis\Melvin\Enums\RestrictionType;
use Swis\Melvin\Enums\RoadManagementType;
use Swis\Melvin\Enums\TransportMode;

class Restriction
{
    public function __construct(
        public string $id,
        public bool $external,
        public ?Geometry $geometry,
        public string $name,
        public Direction $direction,
        public ?TransportMode $transportMode,
        public RestrictionType $restrictionType,
        /**
         * @var \Swis\Melvin\Enums\VehicleType[]
         */
        public array $vehicleTypes,
        public ?RestrictionExtraInfo $emergencyServices,
        public ?RestrictionExtraInfo $publicTransport,
        public ?int $maximumSpeed,
        public ?LaneInformation $laneInformation,
        public ?VehicleInformation $vehicleInformation,
        /**
         * @var \Swis\Melvin\Enums\RoadManagementType[]
         */
        public ?array $roadManagementTypes,
        public ?RoadManagementType $roadManagementType
    ) {
    }
}
