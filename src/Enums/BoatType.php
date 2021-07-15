<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static BoatType PROFESSIONAL()
 * @method static BoatType RECREATIONAL()
 * @method static BoatType STANDING_MAST()
 */
final class BoatType extends Enum
{
    private const PROFESSIONAL = 'PROFESSIONAL';
    private const RECREATIONAL = 'RECREATIONAL';
    private const STANDING_MAST = 'STANDING_MAST';

    public function getLabel(): string
    {
        return [
            'PROFESSIONAL' => 'Beroepsvaart',
            'RECREATIONAL' => 'Recreatie',
            'STANDING_MAST' => 'Staande mast',
        ][$this->getKey()];
    }
}
