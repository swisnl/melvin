<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum PeriodStatus: string
{
    case INITIAL = 'INITIAL';
    case PROBABLY_STARTED = 'PROBABLY_STARTED';
    case STARTED = 'STARTED';
    case OVERRUNNING = 'OVERRUNNING';
    case PROBABLY_ENDED = 'PROBABLY_ENDED';
    case ENDED = 'ENDED';

    public function getLabel(): string
    {
        return match ($this) {
            self::INITIAL => 'Initieel',
            self::PROBABLY_STARTED, self::STARTED => 'Gestart',
            self::OVERRUNNING => 'Uitloop',
            self::PROBABLY_ENDED, self::ENDED => 'Gestopt',
        };
    }
}
