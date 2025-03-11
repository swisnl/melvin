<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum WorkType: string
{
    case Construction = 'CONSTRUCTION';
    case Maintenance = 'MAINTENANCE';
    case Asphalting = 'ASPHALTING';
    case Roadmarking = 'ROADMARKING';
    case RoadsideMaintenance = 'ROADSIDE_MAINTENANCE';
    case Cables = 'CABLES';
    case Pruning = 'PRUNING';
    case Sewerage = 'SEWERAGE';
    case Demolition = 'DEMOLITION';
    case Widening = 'WIDENING';
    case OverheadWorks = 'OVERHEAD_WORKS';
    case WaterwayMaintenance = 'WATERWAY_MAINTENANCE';
    case WaterwayPruning = 'WATERWAY_PRUNING';
    case Dredging = 'DREDGING';
    case Braking = 'BRAKING';
    case Docking = 'DOCKING';
    case ConcreteMaintenance = 'CONCRETE_MAINTENANCE';
    case EngineeringMaintenance = 'ENGINEERING_MAINTENANCE';
    case Electromechanic = 'ELECTROMECHANIC';
    case Diving = 'DIVING';
    case Event = 'EVENT';
    case Unknown = 'UNKNOWN';
    case Other = 'OTHER';

    public function getLabel(): string
    {
        return match ($this) {
            self::Construction => 'Aanleg van ...',
            self::Maintenance => 'Herinrichting / onderhoud van ...',
            self::Asphalting => 'Asfalteringswerkzaamheden',
            self::Roadmarking => 'Wegmarkering',
            self::RoadsideMaintenance => 'Berm onderhoud',
            self::Cables => 'Kabels / Leidingen',
            self::Pruning => 'Kappen / Snoeien',
            self::Sewerage => 'Rioleringswerkzaamheden',
            self::Demolition => 'Sloopwerkzaamheden',
            self::Widening => 'Wegverbreding',
            self::OverheadWorks => 'Bouw / Takel',
            self::WaterwayMaintenance => 'Oever - Onderhoud cq. vervanging',
            self::WaterwayPruning => 'Oever - Maai werkzaamheden',
            self::Dredging => 'Bodem - Baggerwerk cq. vervanging',
            self::Braking => 'Nautische voorziening - Remmingswerken onderhoud cq. vervanging',
            self::Docking => 'Nautische voorziening - Afmeer voorziening',
            self::ConcreteMaintenance => 'Kunstwerk - Betononderhoud',
            self::EngineeringMaintenance => 'Kunstwerk - Werktuigbouwkundig onderhoud',
            self::Electromechanic => 'Kunstwerk - Electromechanisch',
            self::Diving => 'Duikwerkzaamheden',
            self::Event => 'Evenement',
            self::Unknown => 'Onbekend',
            self::Other => 'Overig',
        };
    }
}
