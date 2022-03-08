<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static ImpactDescription NONE()
 * @method static ImpactDescription SLOW_TRAFFIC_RESTRICTION()
 * @method static ImpactDescription ROAD_CLOSED_ONE_DIRECTION()
 * @method static ImpactDescription ROAD_CLOSED_BOTH_WAYS()
 * @method static ImpactDescription REDUCED_NUMBER_OF_LANES()
 * @method static ImpactDescription SPEED_REDUCTION()
 * @method static ImpactDescription ROADWORK_ON_JUNCTION()
 * @method static ImpactDescription OTHER()
 */
final class ImpactDescription extends Enum
{
    private const NONE = 'NONE';
    private const SLOW_TRAFFIC_RESTRICTION = 'SLOW_TRAFFIC_RESTRICTION';
    private const ROAD_CLOSED_ONE_DIRECTION = 'ROAD_CLOSED_ONE_DIRECTION';
    private const ROAD_CLOSED_BOTH_WAYS = 'ROAD_CLOSED_BOTH_WAYS';
    private const REDUCED_NUMBER_OF_LANES = 'REDUCED_NUMBER_OF_LANES';
    private const SPEED_REDUCTION = 'SPEED_REDUCTION';
    private const ROADWORK_ON_JUNCTION = 'ROADWORK_ON_JUNCTION';
    private const OTHER = 'OTHER';

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
        ][$this->getKey()];
    }
}
