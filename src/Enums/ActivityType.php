<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static ActivityType WORK()
 * @method static ActivityType EVENT()
 * @method static ActivityType WATERWAY()
 * @method static ActivityType WATERWAY_EVENT()
 */
final class ActivityType extends Enum
{
    private const WORK = 'WORK';
    private const EVENT = 'EVENT';
    private const WATERWAY = 'WATERWAY';
    private const WATERWAY_EVENT = 'WATERWAY_EVENT';

    public function getLabel(): string
    {
        return [
            'WORK' => 'Werk',
            'EVENT' => 'Evenement',
            'WATERWAY' => 'Vaarweg werk',
            'WATERWAY_EVENT' => 'Vaarweg evenement',
        ][$this->getKey()];
    }
}
