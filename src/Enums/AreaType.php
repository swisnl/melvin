<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static AreaType UNKNOWN()
 * @method static AreaType MUNICIPALITY()
 * @method static AreaType SUBMUNICIPALITY()
 * @method static AreaType ROAD_AUTHORITY()
 * @method static AreaType TUNNEL_AUTHORITY()
 * @method static AreaType PROVINCE()
 * @method static AreaType RAILWAY()
 * @method static AreaType MISCELLANEOUS()
 */
final class AreaType extends Enum
{
    private const UNKNOWN = 'UNKNOWN';
    private const MUNICIPALITY = 'MUNICIPALITY';
    private const SUBMUNICIPALITY = 'SUBMUNICIPALITY';
    private const ROAD_AUTHORITY = 'ROAD_AUTHORITY';
    private const TUNNEL_AUTHORITY = 'TUNNEL_AUTHORITY';
    private const PROVINCE = 'PROVINCE';
    private const RAILWAY = 'RAILWAY';
    private const MISCELLANEOUS = 'MISCELLANEOUS';

    public function getLabel(): string
    {
        return [
            'UNKNOWN' => '',
            'MUNICIPALITY' => 'Gemeente',
            'SUBMUNICIPALITY' => 'Gemeente',
            'ROAD_AUTHORITY' => 'Wegendistrict',
            'TUNNEL_AUTHORITY' => 'Tunnelbeheerder',
            'PROVINCE' => 'Provincie',
            'RAILWAY' => 'Spoorbeheerder',
            'MISCELLANEOUS' => 'Diversen',
        ][$this->getKey()];
    }
}
