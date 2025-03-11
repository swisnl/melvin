<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum RoadAuthorityType: string
{
    case Municipality = 'MUNICIPALITY';
    case Submunicipality = 'SUBMUNICIPALITY';
    case RoadAuthority = 'ROAD_AUTHORITY';
    case TunnelAuthority = 'TUNNEL_AUTHORITY';
    case WaterAuthority = 'WATER_AUTHORITY';
    case PolderAuthority = 'POLDER_AUTHORITY';
    case Province = 'PROVINCE';
    case Railway = 'RAILWAY';
    case Miscellaneous = 'MISCELLANEOUS';
    case Unknown = 'UNKNOWN';

    public function getLabel(): string
    {
        return match ($this) {
            self::Municipality => 'Gemeente',
            self::Submunicipality => 'Stadsdeel',
            self::RoadAuthority => 'Wegendistrict',
            self::TunnelAuthority => 'Tunnelbeheerder',
            self::WaterAuthority => 'Waterschap',
            self::PolderAuthority => 'Hoogheemraadschap',
            self::Province => 'Provincie',
            self::Railway => 'Spoorbeheerder',
            self::Miscellaneous => 'Diversen',
            self::Unknown => 'Onbekend',
        };
    }
}
