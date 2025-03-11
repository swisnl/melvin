<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum WorkObject: string
{
    case Bridge = 'BRIDGE';
    case Guide = 'GUIDE';
    case Barrier = 'BARRIER';
    case Crossing = 'CROSSING';
    case RoadsideEquipment = 'ROADSIDE_EQUIPMENT';
    case Other = 'OTHER';
    case Roundabout = 'ROUNDABOUT';
    case RailwayCrossing = 'RAILWAY_CROSSING';
    case Tramway = 'TRAMWAY';
    case Tunnel = 'TUNNEL';
    case TrafficLights = 'TRAFFIC_LIGHTS';
    case Lighting = 'LIGHTING';
    case Viaduct = 'VIADUCT';
    case WaterDrainage = 'WATER_DRAINAGE';
    case Road = 'ROAD';

    public function getLabel(): string
    {
        return match ($this) {
            self::Bridge => 'Brug',
            self::Guide => 'Geleiderail',
            self::Barrier => 'Geluidswal',
            self::Crossing => 'Kruising',
            self::RoadsideEquipment => 'Meet / Wegkantapparatuur',
            self::Other => 'Overig',
            self::Roundabout => 'Rotonde',
            self::RailwayCrossing => 'Spoorwegovergang',
            self::Tramway => 'Trambaan',
            self::Tunnel => 'Tunnel',
            self::TrafficLights => 'Verkeerslichten',
            self::Lighting => 'Verlichting',
            self::Viaduct => 'Viaduct',
            self::WaterDrainage => 'Waterafvoer (duiker)',
            self::Road => 'Weg',
        };
    }
}
