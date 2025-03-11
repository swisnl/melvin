<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum Delay: string
{
    case NONE = 'NONE';
    case LESS_5_MIN = 'LESS_5_MIN';
    case BETWEEN_5_AND_10_MIN = 'BETWEEN_5_AND_10_MIN';
    case BETWEEN_10_AND_30_MIN = 'BETWEEN_10_AND_30_MIN';
    case MORE_30_MIN = 'MORE_30_MIN';
    case BETWEEN_30_AND_60_MIN = 'BETWEEN_30_AND_60_MIN';
    case BETWEEN_1_AND_2_HOURS = 'BETWEEN_1_AND_2_HOURS';
    case BETWEEN_2_AND_4_HOURS = 'BETWEEN_2_AND_4_HOURS';
    case BETWEEN_4_AND_8_HOURS = 'BETWEEN_4_AND_8_HOURS';
    case MORE_8_HOURS = 'MORE_8_HOURS';

    public function getLabel(): string
    {
        return match ($this) {
            self::NONE => 'Geen vertraging',
            self::LESS_5_MIN => '< 5 min vertraging',
            self::BETWEEN_5_AND_10_MIN => '5-10 min vertraging',
            self::BETWEEN_10_AND_30_MIN => '10-30 min vertraging',
            self::MORE_30_MIN, self::BETWEEN_30_AND_60_MIN => '30-60 min vertraging',
            self::BETWEEN_1_AND_2_HOURS => '1-2 uur vertraging',
            self::BETWEEN_2_AND_4_HOURS => '2-4 uur vertraging',
            self::BETWEEN_4_AND_8_HOURS => '4-8 uur vertraging',
            self::MORE_8_HOURS => '> 8 uur vertraging',
        };
    }
}
