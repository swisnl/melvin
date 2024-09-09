<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static TransportMode CAR()
 * @method static TransportMode BIKE()
 * @method static TransportMode WALK()
 * @method static TransportMode BOAT()
 * @method static TransportMode RAIL()
 * @method static TransportMode BUS()
 */
final class TransportMode extends Enum
{
    private const CAR = 'CAR';
    private const BIKE = 'BIKE';
    private const WALK = 'WALK';
    private const BOAT = 'BOAT';
    private const RAIL = 'RAIL';
    private const BUS = 'BUS';

    public function getLabel(): string
    {
        return [
            'CAR' => 'Auto / Motor',
            'BIKE' => '(snor)Fiets',
            'WALK' => 'Voetganger',
            'BOAT' => 'Vaartuig',
            'RAIL' => 'Trein',
            'BUS' => 'Bus',
        ][$this->getKey()];
    }
}
