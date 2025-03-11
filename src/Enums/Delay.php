<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum Delay: string
{
    case None = 'NONE';
    case Less5Min = 'LESS_5_MIN';
    case Between5And10Min = 'BETWEEN_5_AND_10_MIN';
    case Between10And30Min = 'BETWEEN_10_AND_30_MIN';
    case More30Min = 'MORE_30_MIN';
    case Between30And60Min = 'BETWEEN_30_AND_60_MIN';
    case Between1And2Hours = 'BETWEEN_1_AND_2_HOURS';
    case Between2And4Hours = 'BETWEEN_2_AND_4_HOURS';
    case Between4And8Hours = 'BETWEEN_4_AND_8_HOURS';
    case More8Hours = 'MORE_8_HOURS';

    public function getLabel(): string
    {
        return match ($this) {
            self::None => 'Geen vertraging',
            self::Less5Min => '< 5 min vertraging',
            self::Between5And10Min => '5-10 min vertraging',
            self::Between10And30Min => '10-30 min vertraging',
            self::More30Min, self::Between30And60Min => '30-60 min vertraging',
            self::Between1And2Hours => '1-2 uur vertraging',
            self::Between2And4Hours => '2-4 uur vertraging',
            self::Between4And8Hours => '4-8 uur vertraging',
            self::More8Hours => '> 8 uur vertraging',
        };
    }
}
