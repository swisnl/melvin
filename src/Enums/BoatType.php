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
        return [
            'PROFESSIONAL' => 'Beroepsvaart',
            'RECREATIONAL' => 'Recreatie',
            'STANDING_MAST' => 'Staande mast',
        ][$this->name];
    }
}
