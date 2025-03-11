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
        return [
            'UNKNOWN' => '',
            'MUNICIPALITY' => 'Gemeente',
            'SUBMUNICIPALITY' => 'Gemeente',
            'ROAD_AUTHORITY' => 'Wegendistrict',
            'TUNNEL_AUTHORITY' => 'Tunnelbeheerder',
            'PROVINCE' => 'Provincie',
            'RAILWAY' => 'Spoorbeheerder',
            'MISCELLANEOUS' => 'Diversen',
        ][$this->name];
    }
}
