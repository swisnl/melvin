<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum Impact: string
{
    case None = 'NONE';
    case Little = 'LITTLE';
    case Average = 'AVERAGE';
    case Big = 'BIG';
    case Huge = 'HUGE';

    public function getLabel(): string
    {
        return match ($this) {
            self::None => 'Geen hinder',
            self::Little => 'Kleine hinder',
            self::Average => 'Matige hinder',
            self::Big => 'Grote hinder',
            self::Huge => 'Zeer grote hinder',
        };
    }
}
