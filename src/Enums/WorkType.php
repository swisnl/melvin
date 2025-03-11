<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum WorkType: string
{
    case CONSTRUCTION = 'CONSTRUCTION';
    case MAINTENANCE = 'MAINTENANCE';
    case ASPHALTING = 'ASPHALTING';
    case ROADMARKING = 'ROADMARKING';
    case ROADSIDE_MAINTENANCE = 'ROADSIDE_MAINTENANCE';
    case CABLES = 'CABLES';
    case PRUNING = 'PRUNING';
    case SEWERAGE = 'SEWERAGE';
    case DEMOLITION = 'DEMOLITION';
    case WIDENING = 'WIDENING';
    case OVERHEAD_WORKS = 'OVERHEAD_WORKS';
    case WATERWAY_MAINTENANCE = 'WATERWAY_MAINTENANCE';
    case WATERWAY_PRUNING = 'WATERWAY_PRUNING';
    case DREDGING = 'DREDGING';
    case BRAKING = 'BRAKING';
    case DOCKING = 'DOCKING';
    case CONCRETE_MAINTENANCE = 'CONCRETE_MAINTENANCE';
    case ENGINEERING_MAINTENANCE = 'ENGINEERING_MAINTENANCE';
    case ELECTROMECHANIC = 'ELECTROMECHANIC';
    case DIVING = 'DIVING';
    case EVENT = 'EVENT';
    case UNKNOWN = 'UNKNOWN';
    case OTHER = 'OTHER';

    public function getLabel(): string
    {
        return match ($this) {
            self::CONSTRUCTION => 'Aanleg van ...',
            self::MAINTENANCE => 'Herinrichting / onderhoud van ...',
            self::ASPHALTING => 'Asfalteringswerkzaamheden',
            self::ROADMARKING => 'Wegmarkering',
            self::ROADSIDE_MAINTENANCE => 'Berm onderhoud',
            self::CABLES => 'Kabels / Leidingen',
            self::PRUNING => 'Kappen / Snoeien',
            self::SEWERAGE => 'Rioleringswerkzaamheden',
            self::DEMOLITION => 'Sloopwerkzaamheden',
            self::WIDENING => 'Wegverbreding',
            self::OVERHEAD_WORKS => 'Bouw / Takel',
            self::WATERWAY_MAINTENANCE => 'Oever - Onderhoud cq. vervanging',
            self::WATERWAY_PRUNING => 'Oever - Maai werkzaamheden',
            self::DREDGING => 'Bodem - Baggerwerk cq. vervanging',
            self::BRAKING => 'Nautische voorziening - Remmingswerken onderhoud cq. vervanging',
            self::DOCKING => 'Nautische voorziening - Afmeer voorziening',
            self::CONCRETE_MAINTENANCE => 'Kunstwerk - Betononderhoud',
            self::ENGINEERING_MAINTENANCE => 'Kunstwerk - Werktuigbouwkundig onderhoud',
            self::ELECTROMECHANIC => 'Kunstwerk - Electromechanisch',
            self::DIVING => 'Duikwerkzaamheden',
            self::EVENT => 'Evenement',
            self::UNKNOWN => 'Onbekend',
            self::OTHER => 'Overig',
        };
    }
}
