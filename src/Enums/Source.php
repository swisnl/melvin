<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum Source: string
{
    case Melvin = 'MELVIN';
    case SPIN = 'SPIN';
    case LTC = 'LTC';

    public function getLabel(): string
    {
        return match ($this) {
            self::Melvin => 'Melvin',
            self::SPIN => 'SPIN',
            self::LTC => 'LTC',
        };
    }
}
