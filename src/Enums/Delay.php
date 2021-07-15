<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static Delay NONE()
 * @method static Delay LESS_5_MIN()
 * @method static Delay BETWEEN_5_AND_10_MIN()
 * @method static Delay BETWEEN_10_AND_30_MIN()
 * @method static Delay MORE_30_MIN()
 * @method static Delay BETWEEN_30_AND_60_MIN()
 * @method static Delay BETWEEN_1_AND_2_HOURS()
 * @method static Delay BETWEEN_2_AND_4_HOURS()
 * @method static Delay BETWEEN_4_AND_8_HOURS()
 * @method static Delay MORE_8_HOURS()
 */
final class Delay extends Enum
{
    private const NONE = 'NONE';
    private const LESS_5_MIN = 'LESS_5_MIN';
    private const BETWEEN_5_AND_10_MIN = 'BETWEEN_5_AND_10_MIN';
    private const BETWEEN_10_AND_30_MIN = 'BETWEEN_10_AND_30_MIN';
    private const MORE_30_MIN = 'MORE_30_MIN';
    private const BETWEEN_30_AND_60_MIN = 'BETWEEN_30_AND_60_MIN';
    private const BETWEEN_1_AND_2_HOURS = 'BETWEEN_1_AND_2_HOURS';
    private const BETWEEN_2_AND_4_HOURS = 'BETWEEN_2_AND_4_HOURS';
    private const BETWEEN_4_AND_8_HOURS = 'BETWEEN_4_AND_8_HOURS';
    private const MORE_8_HOURS = 'MORE_8_HOURS';

    public function getLabel(): string
    {
        return [
            'NONE' => 'Geen vertraging',
            'LESS_5_MIN' => '< 5 min vertraging',
            'BETWEEN_5_AND_10_MIN' => '5-10 min vertraging',
            'BETWEEN_10_AND_30_MIN' => '10-30 min vertraging',
            'MORE_30_MIN' => '30-60 min vertraging',
            'BETWEEN_30_AND_60_MIN' => '30-60 min vertraging',
            'BETWEEN_1_AND_2_HOURS' => '1-2 uur vertraging',
            'BETWEEN_2_AND_4_HOURS' => '2-4 uur vertraging',
            'BETWEEN_4_AND_8_HOURS' => '4-8 uur vertraging',
            'MORE_8_HOURS' => '> 8 uur vertraging',
        ][$this->getKey()];
    }
}
