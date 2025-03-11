<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum WorkObject: string
{
    case BRIDGE = 'BRIDGE';
    case GUIDE = 'GUIDE';
    case BARRIER = 'BARRIER';
    case CROSSING = 'CROSSING';
    case ROADSIDE_EQUIPMENT = 'ROADSIDE_EQUIPMENT';
    case OTHER = 'OTHER';
    case ROUNDABOUT = 'ROUNDABOUT';
    case RAILWAY_CROSSING = 'RAILWAY_CROSSING';
    case TRAMWAY = 'TRAMWAY';
    case TUNNEL = 'TUNNEL';
    case TRAFFIC_LIGHTS = 'TRAFFIC_LIGHTS';
    case LIGHTING = 'LIGHTING';
    case VIADUCT = 'VIADUCT';
    case WATER_DRAINAGE = 'WATER_DRAINAGE';
    case ROAD = 'ROAD';

    public function getLabel(): string
    {
        return match ($this) {
            self::BRIDGE => 'Brug',
            self::GUIDE => 'Geleiderail',
            self::BARRIER => 'Geluidswal',
            self::CROSSING => 'Kruising',
            self::ROADSIDE_EQUIPMENT => 'Meet / Wegkantapparatuur',
            self::OTHER => 'Overig',
            self::ROUNDABOUT => 'Rotonde',
            self::RAILWAY_CROSSING => 'Spoorwegovergang',
            self::TRAMWAY => 'Trambaan',
            self::TUNNEL => 'Tunnel',
            self::TRAFFIC_LIGHTS => 'Verkeerslichten',
            self::LIGHTING => 'Verlichting',
            self::VIADUCT => 'Viaduct',
            self::WATER_DRAINAGE => 'Waterafvoer (duiker)',
            self::ROAD => 'Weg',
        };
    }
}
