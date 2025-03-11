<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum VehicleType: string
{
    case CAR = 'CAR';
    case VAN = 'VAN';
    case PEDESTRIAN = 'PEDESTRIAN';
    case BIKE = 'BIKE';
    case SCOOTER = 'SCOOTER';
    case AGRICULTURAL_VEHICLE = 'AGRICULTURAL_VEHICLE';
    case BUS = 'BUS';

    public function getLabel(): string
    {
        return match ($this) {
            self::CAR => 'Auto / Motor',
            self::VAN => 'Vrachtwagen',
            self::PEDESTRIAN => 'Voetganger',
            self::BIKE => '(snor)Fiets',
            self::SCOOTER => 'Brommer',
            self::AGRICULTURAL_VEHICLE => 'Agrarisch voertuig',
            self::BUS => 'Bus',
        };
    }
}
