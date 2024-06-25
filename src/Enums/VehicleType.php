<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static VehicleType CAR()
 * @method static VehicleType VAN()
 * @method static VehicleType PEDESTRIAN()
 * @method static VehicleType BIKE()
 * @method static VehicleType SCOOTER()
 * @method static VehicleType AGRICULTURAL_VEHICLE()
 * @method static VehicleType BUS()
 */
final class VehicleType extends Enum
{
    private const CAR = 'CAR';
    private const VAN = 'VAN';
    private const PEDESTRIAN = 'PEDESTRIAN';
    private const BIKE = 'BIKE';
    private const SCOOTER = 'SCOOTER';
    private const AGRICULTURAL_VEHICLE = 'AGRICULTURAL_VEHICLE';
    private const BUS = 'BUS';

    public function getLabel(): string
    {
        return [
            'CAR' => 'Auto / Motor',
            'VAN' => 'Vrachtwagen',
            'PEDESTRIAN' => 'Voetganger',
            'BIKE' => '(snor)Fiets',
            'SCOOTER' => 'Brommer',
            'AGRICULTURAL_VEHICLE' => 'Agrarisch voertuig',
            'BUS' => 'Bus',
        ][$this->getKey()];
    }
}
