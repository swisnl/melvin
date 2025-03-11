<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum RoadManagementType: string
{
    case UNKNOWN = 'UNKNOWN';
    case SPEED_RESTRICTION = 'SPEED_RESTRICTION';
    case DISPLACEMENT = 'DISPLACEMENT';
    case NARROW_LANES = 'NARROW_LANES';
    case CLOSURES = 'CLOSURES';
    case CLOSED_LANES = 'CLOSED_LANES';
    case ROAD_CLOSED_ONE_DIRECTION = 'ROAD_CLOSED_ONE_DIRECTION';
    case JUNCTION_CONNECTING_CARRIAGEWAY_CLOSED = 'JUNCTION_CONNECTING_CARRIAGEWAY_CLOSED';
    case JUNCTION_ENTRY_CLOSED = 'JUNCTION_ENTRY_CLOSED';
    case JUNCTION_EXIT_CLOSED = 'JUNCTION_EXIT_CLOSED';
    case HARD_SHOULDER_USAGE = 'HARD_SHOULDER_USAGE';

    public function getLabel(): string
    {
        return [
            'UNKNOWN' => '',
            'SPEED_RESTRICTION' => 'Snelheidsbeperking',
            'DISPLACEMENT' => 'Verplaatsing van de rijbaan',
            'NARROW_LANES' => 'Versmalde rijstroken',
            'CLOSURES' => 'Afsluiting',
            'CLOSED_LANES' => 'Verminderd aantal rijstroken beschikbaar',
            'ROAD_CLOSED_ONE_DIRECTION' => 'Wegafsluiting',
            'JUNCTION_CONNECTING_CARRIAGEWAY_CLOSED' => 'Afsluiting verbindingsweg',
            'JUNCTION_ENTRY_CLOSED' => 'Afsluiting toerit',
            'JUNCTION_EXIT_CLOSED' => 'Afsluiting afrit',
            'HARD_SHOULDER_USAGE' => 'Verkeer via vluchtstrook',
        ][$this->name];
    }
}
