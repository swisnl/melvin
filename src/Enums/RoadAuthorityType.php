<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum RoadAuthorityType: string
{
    case MUNICIPALITY = 'MUNICIPALITY';
    case SUBMUNICIPALITY = 'SUBMUNICIPALITY';
    case ROAD_AUTHORITY = 'ROAD_AUTHORITY';
    case TUNNEL_AUTHORITY = 'TUNNEL_AUTHORITY';
    case WATER_AUTHORITY = 'WATER_AUTHORITY';
    case POLDER_AUTHORITY = 'POLDER_AUTHORITY';
    case PROVINCE = 'PROVINCE';
    case RAILWAY = 'RAILWAY';
    case MISCELLANEOUS = 'MISCELLANEOUS';
    case UNKNOWN = 'UNKNOWN';

    public function getLabel(): string
    {
        return match ($this) {
            self::MUNICIPALITY => 'Gemeente',
            self::SUBMUNICIPALITY => 'Stadsdeel',
            self::ROAD_AUTHORITY => 'Wegendistrict',
            self::TUNNEL_AUTHORITY => 'Tunnelbeheerder',
            self::WATER_AUTHORITY => 'Waterschap',
            self::POLDER_AUTHORITY => 'Hoogheemraadschap',
            self::PROVINCE => 'Provincie',
            self::RAILWAY => 'Spoorbeheerder',
            self::MISCELLANEOUS => 'Diversen',
            self::UNKNOWN => 'Onbekend',
        };
    }
}
