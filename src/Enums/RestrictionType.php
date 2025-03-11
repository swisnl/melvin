<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum RestrictionType: string
{
    case None = 'NONE';
    case Speed = 'SPEED';
    case Complete = 'COMPLETE';

    public function getLabel(): string
    {
        return match ($this) {
            self::None => 'Geen verkeersmaatregel noodzakelijk',
            self::Speed => 'Snelheidsbeperking',
            self::Complete => 'Afsluiting',
        };
    }
}
