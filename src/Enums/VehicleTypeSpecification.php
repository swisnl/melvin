<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum VehicleTypeSpecification: string
{
    case Specified = 'SPECIFIED';
    case AllForThisRoadType = 'ALL_FOR_THIS_ROADTYPE';

    public function getLabel(): string
    {
        return match ($this) {
            self::Specified => 'Specifieke voertuigen',
            self::AllForThisRoadType => 'Alle verkeer voor dit type weg',
        };
    }
}
