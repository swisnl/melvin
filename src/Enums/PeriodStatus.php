<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static PeriodStatus INITIAL()
 * @method static PeriodStatus PROBABLY_STARTED()
 * @method static PeriodStatus STARTED()
 * @method static PeriodStatus OVERRUNNING()
 * @method static PeriodStatus PROBABLY_ENDED()
 * @method static PeriodStatus ENDED()
 */
final class PeriodStatus extends Enum
{
    private const INITIAL = 'INITIAL';
    private const PROBABLY_STARTED = 'PROBABLY_STARTED';
    private const STARTED = 'STARTED';
    private const OVERRUNNING = 'OVERRUNNING';
    private const PROBABLY_ENDED = 'PROBABLY_ENDED';
    private const ENDED = 'ENDED';

    public function getLabel(): string
    {
        return [
            'INITIAL' => 'Initieel',
            'PROBABLY_STARTED' => 'Gestart',
            'STARTED' => 'Gestart',
            'OVERRUNNING' => 'Uitloop',
            'PROBABLY_ENDED' => 'Gestopt',
            'ENDED' => 'Gestopt',
        ][$this->getKey()];
    }
}
