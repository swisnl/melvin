<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum ImpactDescription: string
{
    case None = 'NONE';
    case SlowTrafficRestriction = 'SLOW_TRAFFIC_RESTRICTION';
    case RoadClosedOneDirection = 'ROAD_CLOSED_ONE_DIRECTION';
    case RoadClosedBothWays = 'ROAD_CLOSED_BOTH_WAYS';
    case ReducedNumberOfLanes = 'REDUCED_NUMBER_OF_LANES';
    case SpeedReduction = 'SPEED_REDUCTION';
    case RoadworkOnJunction = 'ROADWORK_ON_JUNCTION';
    case Other = 'OTHER';

    public function getLabel(): string
    {
        return match ($this) {
            self::None => 'Geen',
            self::SlowTrafficRestriction => 'Beperking voor langzaam verkeer',
            self::RoadClosedOneDirection => 'Weg dicht in één richting',
            self::RoadClosedBothWays => 'Weg dicht in beide richtingen',
            self::ReducedNumberOfLanes => 'Verminderd aantal rijstroken beschikbaar',
            self::SpeedReduction => 'Snelheidsbeperking',
            self::RoadworkOnJunction => 'Werkzaamheden op kruising/rotonde',
            self::Other => 'Anders',
        };
    }
}
