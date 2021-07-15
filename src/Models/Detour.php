<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

use GeoJson\Geometry\Geometry;
use Swis\Melvin\Enums\Direction;
use Swis\Melvin\Enums\TransportMode;

class Detour
{
    public string $id;

    public bool $external;

    public Geometry $geometry;

    public string $name;

    public Direction $direction;

    public ?TransportMode $transportMode;

    /**
     * @var \Swis\Melvin\Enums\VehicleType[]
     */
    public array $vehicleTypes;

    /**
     * @var \Swis\Melvin\Enums\BoatType[]
     */
    public array $boatTypes;

    public function __construct(
        string $id,
        bool $external,
        Geometry $geometry,
        string $name,
        Direction $direction,
        ?TransportMode $transportMode,
        array $vehicleTypes,
        array $boatTypes
    ) {
        $this->id = $id;
        $this->external = $external;
        $this->geometry = $geometry;
        $this->name = $name;
        $this->direction = $direction;
        $this->transportMode = $transportMode;
        $this->vehicleTypes = $vehicleTypes;
        $this->boatTypes = $boatTypes;
    }
}
