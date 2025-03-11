<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum TransportMode: string
{
    case CAR = 'CAR';
    case BIKE = 'BIKE';
    case WALK = 'WALK';
    case BOAT = 'BOAT';
    case RAIL = 'RAIL';
    case BUS = 'BUS';

    public function getLabel(): string
    {
        return match ($this) {
            self::CAR => 'Auto / Motor',
            self::BIKE => '(snor)Fiets',
            self::WALK => 'Voetganger',
            self::BOAT => 'Vaartuig',
            self::RAIL => 'Trein',
            self::BUS => 'Bus',
        };
    }
}
