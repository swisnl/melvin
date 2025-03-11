<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum RestrictionType: string
{
    case NONE = 'NONE';
    case SPEED = 'SPEED';
    case COMPLETE = 'COMPLETE';

    public function getLabel(): string
    {
        return match ($this) {
            self::NONE => 'Geen verkeersmaatregel noodzakelijk',
            self::SPEED => 'Snelheidsbeperking',
            self::COMPLETE => 'Afsluiting',
        };
    }
}
