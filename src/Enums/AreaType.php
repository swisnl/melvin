<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum AreaType: string
{
    case Unknown = 'UNKNOWN';
    case Municipality = 'MUNICIPALITY';
    case Submunicipality = 'SUBMUNICIPALITY';
    case RoadAuthority = 'ROAD_AUTHORITY';
    case TunnelAuthority = 'TUNNEL_AUTHORITY';
    case Province = 'PROVINCE';
    case Railway = 'RAILWAY';
    case Miscellaneous = 'MISCELLANEOUS';

    public function getLabel(): string
    {
        return match ($this) {
            self::Unknown => '',
            self::Municipality, self::Submunicipality => 'Gemeente',
            self::RoadAuthority => 'Wegendistrict',
            self::TunnelAuthority => 'Tunnelbeheerder',
            self::Province => 'Provincie',
            self::Railway => 'Spoorbeheerder',
            self::Miscellaneous => 'Diversen',
        };
    }
}
