<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum RoadManagementType: string
{
    case Unknown = 'UNKNOWN';
    case SpeedRestriction = 'SPEED_RESTRICTION';
    case Displacement = 'DISPLACEMENT';
    case NarrowLanes = 'NARROW_LANES';
    case Closures = 'CLOSURES';
    case ClosedLanes = 'CLOSED_LANES';
    case RoadClosedOneDirection = 'ROAD_CLOSED_ONE_DIRECTION';
    case JunctionConnectingCarriagewayClosed = 'JUNCTION_CONNECTING_CARRIAGEWAY_CLOSED';
    case JunctionEntryClosed = 'JUNCTION_ENTRY_CLOSED';
    case JunctionExitClosed = 'JUNCTION_EXIT_CLOSED';
    case HardShoulderUsage = 'HARD_SHOULDER_USAGE';

    public function getLabel(): string
    {
        return match ($this) {
            self::Unknown => '',
            self::SpeedRestriction => 'Snelheidsbeperking',
            self::Displacement => 'Verplaatsing van de rijbaan',
            self::NarrowLanes => 'Versmalde rijstroken',
            self::Closures => 'Afsluiting',
            self::ClosedLanes => 'Verminderd aantal rijstroken beschikbaar',
            self::RoadClosedOneDirection => 'Wegafsluiting',
            self::JunctionConnectingCarriagewayClosed => 'Afsluiting verbindingsweg',
            self::JunctionEntryClosed => 'Afsluiting toerit',
            self::JunctionExitClosed => 'Afsluiting afrit',
            self::HardShoulderUsage => 'Verkeer via vluchtstrook',
        };
    }
}
