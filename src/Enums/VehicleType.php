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
        return [
            'CAR' => 'Auto / Motor',
            'VAN' => 'Vrachtwagen',
            'PEDESTRIAN' => 'Voetganger',
            'BIKE' => '(snor)Fiets',
            'SCOOTER' => 'Brommer',
            'AGRICULTURAL_VEHICLE' => 'Agrarisch voertuig',
            'BUS' => 'Bus',
        ][$this->name];
    }
}
