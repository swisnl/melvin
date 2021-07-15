<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static RoadAuthorityType MUNICIPALITY()
 * @method static RoadAuthorityType SUBMUNICIPALITY()
 * @method static RoadAuthorityType ROAD_AUTHORITY()
 * @method static RoadAuthorityType TUNNEL_AUTHORITY()
 * @method static RoadAuthorityType WATER_AUTHORITY()
 * @method static RoadAuthorityType POLDER_AUTHORITY()
 * @method static RoadAuthorityType PROVINCE()
 */
final class RoadAuthorityType extends Enum
{
    private const MUNICIPALITY = 'MUNICIPALITY';
    private const SUBMUNICIPALITY = 'SUBMUNICIPALITY';
    private const ROAD_AUTHORITY = 'ROAD_AUTHORITY';
    private const TUNNEL_AUTHORITY = 'TUNNEL_AUTHORITY';
    private const WATER_AUTHORITY = 'WATER_AUTHORITY';
    private const POLDER_AUTHORITY = 'POLDER_AUTHORITY';
    private const PROVINCE = 'PROVINCE';

    public function getLabel(): string
    {
        return [
            'MUNICIPALITY' => 'Gemeente',
            'SUBMUNICIPALITY' => 'Gemeente',
            'ROAD_AUTHORITY' => 'Wegendistrict',
            'TUNNEL_AUTHORITY' => 'Tunnelbeheerder',
            'WATER_AUTHORITY' => 'Waterschap',
            'POLDER_AUTHORITY' => 'Hoogheemraadschap',
            'PROVINCE' => 'Provincie',
        ][$this->getKey()];
    }
}
