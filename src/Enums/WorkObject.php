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
        return [
            'BRIDGE' => 'Brug',
            'GUIDE' => 'Geleiderail',
            'BARRIER' => 'Geluidswal',
            'CROSSING' => 'Kruising',
            'ROADSIDE_EQUIPMENT' => 'Meet / Wegkantapparatuur',
            'OTHER' => 'Overig',
            'ROUNDABOUT' => 'Rotonde',
            'RAILWAY_CROSSING' => 'Spoorwegovergang',
            'TRAMWAY' => 'Trambaan',
            'TUNNEL' => 'Tunnel',
            'TRAFFIC_LIGHTS' => 'Verkeerslichten',
            'LIGHTING' => 'Verlichting',
            'VIADUCT' => 'Viaduct',
            'WATER_DRAINAGE' => 'Waterafvoer (duiker)',
            'ROAD' => 'Weg',
        ][$this->name];
    }
}
