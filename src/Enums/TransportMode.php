<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum TransportMode: string
{
    case Car = 'CAR';
    case Bike = 'BIKE';
    case Walk = 'WALK';
    case Boat = 'BOAT';
    case Rail = 'RAIL';
    case Bus = 'BUS';

    public function getLabel(): string
    {
        return match ($this) {
            self::Car => 'Auto / Motor',
            self::Bike => '(snor)Fiets',
            self::Walk => 'Voetganger',
            self::Boat => 'Vaartuig',
            self::Rail => 'Trein',
            self::Bus => 'Bus',
        };
    }
}
