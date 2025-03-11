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
        return [
            'CAR' => 'Auto / Motor',
            'BIKE' => '(snor)Fiets',
            'WALK' => 'Voetganger',
            'BOAT' => 'Vaartuig',
            'RAIL' => 'Trein',
            'BUS' => 'Bus',
        ][$this->name];
    }
}
