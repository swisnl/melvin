<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static WorkType CONSTRUCTION()
 * @method static WorkType MAINTENANCE()
 * @method static WorkType ASPHALTING()
 * @method static WorkType ROADMARKING()
 * @method static WorkType ROADSIDE_MAINTENANCE()
 * @method static WorkType CABLES()
 * @method static WorkType PRUNING()
 * @method static WorkType SEWERAGE()
 * @method static WorkType DEMOLITION()
 * @method static WorkType WIDENING()
 * @method static WorkType OVERHEAD_WORKS()
 * @method static WorkType WATERWAY_MAINTENANCE()
 * @method static WorkType WATERWAY_PRUNING()
 * @method static WorkType DREDGING()
 * @method static WorkType BRAKING()
 * @method static WorkType DOCKING()
 * @method static WorkType CONCRETE_MAINTENANCE()
 * @method static WorkType ENGINEERING_MAINTENANCE()
 * @method static WorkType ELECTROMECHANIC()
 * @method static WorkType DIVING()
 * @method static WorkType EVENT()
 * @method static WorkType UNKNOWN()
 * @method static WorkType OTHER()
 */
final class WorkType extends Enum
{
    private const CONSTRUCTION = 'CONSTRUCTION';
    private const MAINTENANCE = 'MAINTENANCE';
    private const ASPHALTING = 'ASPHALTING';
    private const ROADMARKING = 'ROADMARKING';
    private const ROADSIDE_MAINTENANCE = 'ROADSIDE_MAINTENANCE';
    private const CABLES = 'CABLES';
    private const PRUNING = 'PRUNING';
    private const SEWERAGE = 'SEWERAGE';
    private const DEMOLITION = 'DEMOLITION';
    private const WIDENING = 'WIDENING';
    private const OVERHEAD_WORKS = 'OVERHEAD_WORKS';
    private const WATERWAY_MAINTENANCE = 'WATERWAY_MAINTENANCE';
    private const WATERWAY_PRUNING = 'WATERWAY_PRUNING';
    private const DREDGING = 'DREDGING';
    private const BRAKING = 'BRAKING';
    private const DOCKING = 'DOCKING';
    private const CONCRETE_MAINTENANCE = 'CONCRETE_MAINTENANCE';
    private const ENGINEERING_MAINTENANCE = 'ENGINEERING_MAINTENANCE';
    private const ELECTROMECHANIC = 'ELECTROMECHANIC';
    private const DIVING = 'DIVING';
    private const EVENT = 'EVENT';
    private const UNKNOWN = 'UNKNOWN';
    private const OTHER = 'OTHER';

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
        ][$this->getKey()];
    }
}
