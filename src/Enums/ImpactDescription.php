<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum ImpactDescription: string
{
    case NONE = 'NONE';
    case SLOW_TRAFFIC_RESTRICTION = 'SLOW_TRAFFIC_RESTRICTION';
    case ROAD_CLOSED_ONE_DIRECTION = 'ROAD_CLOSED_ONE_DIRECTION';
    case ROAD_CLOSED_BOTH_WAYS = 'ROAD_CLOSED_BOTH_WAYS';
    case REDUCED_NUMBER_OF_LANES = 'REDUCED_NUMBER_OF_LANES';
    case SPEED_REDUCTION = 'SPEED_REDUCTION';
    case ROADWORK_ON_JUNCTION = 'ROADWORK_ON_JUNCTION';
    case OTHER = 'OTHER';

    public function getLabel(): string
    {
        return [
            'NONE' => 'Geen',
            'SLOW_TRAFFIC_RESTRICTION' => 'Beperking voor langzaam verkeer',
            'ROAD_CLOSED_ONE_DIRECTION' => 'Weg dicht in één richting',
            'ROAD_CLOSED_BOTH_WAYS' => 'Weg dicht in beide richtingen',
            'REDUCED_NUMBER_OF_LANES' => 'Verminderd aantal rijstroken beschikbaar',
            'SPEED_REDUCTION' => 'Snelheidsbeperking',
            'ROADWORK_ON_JUNCTION' => 'Werkzaamheden op kruising/rotonde',
            'OTHER' => 'Anders',
        ][$this->name];
    }
}
