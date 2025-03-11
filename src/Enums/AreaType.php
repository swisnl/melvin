<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum AreaType: string
{
    case UNKNOWN = 'UNKNOWN';
    case MUNICIPALITY = 'MUNICIPALITY';
    case SUBMUNICIPALITY = 'SUBMUNICIPALITY';
    case ROAD_AUTHORITY = 'ROAD_AUTHORITY';
    case TUNNEL_AUTHORITY = 'TUNNEL_AUTHORITY';
    case PROVINCE = 'PROVINCE';
    case RAILWAY = 'RAILWAY';
    case MISCELLANEOUS = 'MISCELLANEOUS';

    public function getLabel(): string
    {
        return match ($this) {
            self::UNKNOWN => '',
            self::MUNICIPALITY, self::SUBMUNICIPALITY => 'Gemeente',
            self::ROAD_AUTHORITY => 'Wegendistrict',
            self::TUNNEL_AUTHORITY => 'Tunnelbeheerder',
            self::PROVINCE => 'Provincie',
            self::RAILWAY => 'Spoorbeheerder',
            self::MISCELLANEOUS => 'Diversen',
        };
    }
}
