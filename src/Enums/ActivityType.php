<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static ActivityType WORK()
 * @method static ActivityType EVENT()
 * @method static ActivityType WATERWAY()
 */
final class ActivityType extends Enum
{
    private const WORK = 'WORK';
    private const EVENT = 'EVENT';
    private const WATERWAY = 'WATERWAY';

    public function getLabel(): string
    {
        return [
            'WORK' => 'Werk',
            'EVENT' => 'Evenement',
            'WATERWAY' => 'Vaarwegen',
        ][$this->getKey()];
    }
}
