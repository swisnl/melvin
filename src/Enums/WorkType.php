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
        return [
            'CONSTRUCTION' => 'Aanleg van ...',
            'MAINTENANCE' => 'Herinrichting / onderhoud van ...',
            'ASPHALTING' => 'Asfalteringswerkzaamheden',
            'ROADMARKING' => 'Wegmarkering',
            'ROADSIDE_MAINTENANCE' => 'Berm onderhoud',
            'CABLES' => 'Kabels / Leidingen',
            'PRUNING' => 'Kappen / Snoeien',
            'SEWERAGE' => 'Rioleringswerkzaamheden',
            'DEMOLITION' => 'Sloopwerkzaamheden',
            'WIDENING' => 'Wegverbreding',
            'OVERHEAD_WORKS' => 'Bouw / Takel',
            'WATERWAY_MAINTENANCE' => 'Oever - Onderhoud cq. vervanging',
            'WATERWAY_PRUNING' => 'Oever - Maai werkzaamheden',
            'DREDGING' => 'Bodem - Baggerwerk cq. vervanging',
            'BRAKING' => 'Nautische voorziening - Remmingswerken onderhoud cq. vervanging',
            'DOCKING' => 'Nautische voorziening - Afmeer voorziening',
            'CONCRETE_MAINTENANCE' => 'Kunstwerk - Betononderhoud',
            'ENGINEERING_MAINTENANCE' => 'Kunstwerk - Werktuigbouwkundig onderhoud',
            'ELECTROMECHANIC' => 'Kunstwerk - Electromechanisch',
            'DIVING' => 'Duikwerkzaamheden',
            'EVENT' => 'Evenement',
            'UNKNOWN' => 'Onbekend',
            'OTHER' => 'Overig',
        ][$this->name];
    }
}
