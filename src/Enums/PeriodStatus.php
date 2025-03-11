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
        return [
            'INITIAL' => 'Initieel',
            'PROBABLY_STARTED' => 'Gestart',
            'STARTED' => 'Gestart',
            'OVERRUNNING' => 'Uitloop',
            'PROBABLY_ENDED' => 'Gestopt',
            'ENDED' => 'Gestopt',
        ][$this->name];
    }
}
