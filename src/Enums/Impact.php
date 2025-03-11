<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum Impact: string
{
    case NONE = 'NONE';
    case LITTLE = 'LITTLE';
    case AVERAGE = 'AVERAGE';
    case BIG = 'BIG';
    case HUGE = 'HUGE';

    public function getLabel(): string
    {
        return match ($this) {
            self::NONE => 'Geen hinder',
            self::LITTLE => 'Kleine hinder',
            self::AVERAGE => 'Matige hinder',
            self::BIG => 'Grote hinder',
            self::HUGE => 'Zeer grote hinder',
        };
    }
}
