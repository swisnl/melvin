<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum VehicleType: string
{
    case Car = 'CAR';
    case Van = 'VAN';
    case Pedestrian = 'PEDESTRIAN';
    case Bike = 'BIKE';
    case Scooter = 'SCOOTER';
    case AgriculturalVehicle = 'AGRICULTURAL_VEHICLE';
    case Bus = 'BUS';

    public function getLabel(): string
    {
        return match ($this) {
            self::Car => 'Auto / Motor',
            self::Van => 'Vrachtwagen',
            self::Pedestrian => 'Voetganger',
            self::Bike => '(snor)Fiets',
            self::Scooter => 'Brommer',
            self::AgriculturalVehicle => 'Agrarisch voertuig',
            self::Bus => 'Bus',
        };
    }
}
