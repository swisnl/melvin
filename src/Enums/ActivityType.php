<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum ActivityType: string
{
    case WORK = 'WORK';
    case EVENT = 'EVENT';
    case WATERWAY = 'WATERWAY';
    case WATERWAY_EVENT = 'WATERWAY_EVENT';

    public function getLabel(): string
    {
        return match ($this) {
            self::WORK => 'Werk',
            self::EVENT => 'Evenement',
            self::WATERWAY => 'Vaarweg werk',
            self::WATERWAY_EVENT => 'Vaarweg evenement',
        };
    }
}
