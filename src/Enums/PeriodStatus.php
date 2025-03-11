<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum PeriodStatus: string
{
    case Initial = 'INITIAL';
    case ProbablyStarted = 'PROBABLY_STARTED';
    case Started = 'STARTED';
    case Overrunning = 'OVERRUNNING';
    case ProbablyEnded = 'PROBABLY_ENDED';
    case Ended = 'ENDED';

    public function getLabel(): string
    {
        return match ($this) {
            self::Initial => 'Initieel',
            self::ProbablyStarted, self::Started => 'Gestart',
            self::Overrunning => 'Uitloop',
            self::ProbablyEnded, self::Ended => 'Gestopt',
        };
    }
}
