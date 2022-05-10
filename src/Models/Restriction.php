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
    public string $id;

    public bool $external;

    public ?Geometry $geometry;

    public string $name;

    public Direction $direction;

    public ?TransportMode $transportMode;

    public RestrictionType $restrictionType;

    /**
     * @var \Swis\Melvin\Enums\VehicleType[]
     */
    public array $vehicleTypes;

    public ?RestrictionExtraInfo $emergencyServices;

    public ?RestrictionExtraInfo $publicTransport;

    public ?int $maximumSpeed;

    public ?LaneInformation $laneInformation;

    public ?VehicleInformation $vehicleInformation;

    /**
     * @var \Swis\Melvin\Enums\RoadManagementType[]
     */
    public ?array $roadManagementTypes;

    public ?RoadManagementType $roadManagementType;

    public function __construct(
        string $id,
        bool $external,
        ?Geometry $geometry,
        string $name,
        Direction $direction,
        ?TransportMode $transportMode,
        RestrictionType $restrictionType,
        array $vehicleTypes,
        ?RestrictionExtraInfo $emergencyServices,
        ?RestrictionExtraInfo $publicTransport,
        ?int $maximumSpeed,
        ?LaneInformation $laneInformation,
        ?VehicleInformation $vehicleInformation,
        ?array $roadManagementTypes,
        ?RoadManagementType $roadManagementType
    ) {
        $this->id = $id;
        $this->external = $external;
        $this->geometry = $geometry;
        $this->name = $name;
        $this->direction = $direction;
        $this->transportMode = $transportMode;
        $this->restrictionType = $restrictionType;
        $this->vehicleTypes = $vehicleTypes;
        $this->emergencyServices = $emergencyServices;
        $this->publicTransport = $publicTransport;
        $this->maximumSpeed = $maximumSpeed;
        $this->laneInformation = $laneInformation;
        $this->vehicleInformation = $vehicleInformation;
        $this->roadManagementTypes = $roadManagementTypes;
        $this->roadManagementType = $roadManagementType;
    }
}
