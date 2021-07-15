<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static RoadManagementType UNKNOWN()
 * @method static RoadManagementType SPEED_RESTRICTION()
 * @method static RoadManagementType DISPLACEMENT()
 * @method static RoadManagementType NARROW_LANES()
 * @method static RoadManagementType CLOSURES()
 * @method static RoadManagementType CLOSED_LANES()
 * @method static RoadManagementType ROAD_CLOSED_ONE_DIRECTION()
 * @method static RoadManagementType JUNCTION_CONNECTING_CARRIAGEWAY_CLOSED()
 * @method static RoadManagementType JUNCTION_ENTRY_CLOSED()
 * @method static RoadManagementType JUNCTION_EXIT_CLOSED()
 * @method static RoadManagementType HARD_SHOULDER_USAGE()
 */
final class RoadManagementType extends Enum
{
    private const UNKNOWN = 'UNKNOWN';
    private const SPEED_RESTRICTION = 'SPEED_RESTRICTION';
    private const DISPLACEMENT = 'DISPLACEMENT';
    private const NARROW_LANES = 'NARROW_LANES';
    private const CLOSURES = 'CLOSURES';
    private const CLOSED_LANES = 'CLOSED_LANES';
    private const ROAD_CLOSED_ONE_DIRECTION = 'ROAD_CLOSED_ONE_DIRECTION';
    private const JUNCTION_CONNECTING_CARRIAGEWAY_CLOSED = 'JUNCTION_CONNECTING_CARRIAGEWAY_CLOSED';
    private const JUNCTION_ENTRY_CLOSED = 'JUNCTION_ENTRY_CLOSED';
    private const JUNCTION_EXIT_CLOSED = 'JUNCTION_EXIT_CLOSED';
    private const HARD_SHOULDER_USAGE = 'HARD_SHOULDER_USAGE';

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
        ][$this->getKey()];
    }
}
