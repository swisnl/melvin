<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static WorkObject BRIDGE()
 * @method static WorkObject GUIDE()
 * @method static WorkObject BARRIER()
 * @method static WorkObject CROSSING()
 * @method static WorkObject ROADSIDE_EQUIPMENT()
 * @method static WorkObject OTHER()
 * @method static WorkObject ROUNDABOUT()
 * @method static WorkObject RAILWAY_CROSSING()
 * @method static WorkObject TRAMWAY()
 * @method static WorkObject TUNNEL()
 * @method static WorkObject TRAFFIC_LIGHTS()
 * @method static WorkObject LIGHTING()
 * @method static WorkObject VIADUCT()
 * @method static WorkObject WATER_DRAINAGE()
 * @method static WorkObject ROAD()
 */
final class WorkObject extends Enum
{
    private const BRIDGE = 'BRIDGE';
    private const GUIDE = 'GUIDE';
    private const BARRIER = 'BARRIER';
    private const CROSSING = 'CROSSING';
    private const ROADSIDE_EQUIPMENT = 'ROADSIDE_EQUIPMENT';
    private const OTHER = 'OTHER';
    private const ROUNDABOUT = 'ROUNDABOUT';
    private const RAILWAY_CROSSING = 'RAILWAY_CROSSING';
    private const TRAMWAY = 'TRAMWAY';
    private const TUNNEL = 'TUNNEL';
    private const TRAFFIC_LIGHTS = 'TRAFFIC_LIGHTS';
    private const LIGHTING = 'LIGHTING';
    private const VIADUCT = 'VIADUCT';
    private const WATER_DRAINAGE = 'WATER_DRAINAGE';
    private const ROAD = 'ROAD';

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
        ][$this->getKey()];
    }
}
