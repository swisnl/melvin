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
        return [
            'MUNICIPALITY' => 'Gemeente',
            'SUBMUNICIPALITY' => 'Stadsdeel',
            'ROAD_AUTHORITY' => 'Wegendistrict',
            'TUNNEL_AUTHORITY' => 'Tunnelbeheerder',
            'WATER_AUTHORITY' => 'Waterschap',
            'POLDER_AUTHORITY' => 'Hoogheemraadschap',
            'PROVINCE' => 'Provincie',
            'RAILWAY' => 'Spoorbeheerder',
            'MISCELLANEOUS' => 'Diversen',
            'UNKNOWN' => 'Onbekend',
        ][$this->name];
    }
}
