<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum ActivityType: string
{
    case Work = 'WORK';
    case Event = 'EVENT';
    case Waterway = 'WATERWAY';
    case WaterwayEvent = 'WATERWAY_EVENT';
    case Railway = 'RAILWAY';

    public function getLabel(): string
    {
        return match ($this) {
            self::Work => 'Werk',
            self::Event => 'Evenement',
            self::Waterway => 'Vaarweg werk',
            self::WaterwayEvent => 'Vaarweg evenement',
            self::Railway => 'Spoorweg',
        };
    }
}
