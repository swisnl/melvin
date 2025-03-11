<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum BoatType: string
{
    case Professional = 'PROFESSIONAL';
    case Recreational = 'RECREATIONAL';
    case StandingMast = 'STANDING_MAST';

    public function getLabel(): string
    {
        return match ($this) {
            self::Professional => 'Beroepsvaart',
            self::Recreational => 'Recreatie',
            self::StandingMast => 'Staande mast',
        };
    }
}
