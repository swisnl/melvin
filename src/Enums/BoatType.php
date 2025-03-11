<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum BoatType: string
{
    case PROFESSIONAL = 'PROFESSIONAL';
    case RECREATIONAL = 'RECREATIONAL';
    case STANDING_MAST = 'STANDING_MAST';

    public function getLabel(): string
    {
        return match ($this) {
            self::PROFESSIONAL => 'Beroepsvaart',
            self::RECREATIONAL => 'Recreatie',
            self::STANDING_MAST => 'Staande mast',
        };
    }
}
