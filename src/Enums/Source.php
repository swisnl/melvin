<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static Source MELVIN()
 * @method static Source SPIN()
 * @method static Source LTC()
 */
final class Source extends Enum
{
    private const MELVIN = 'MELVIN';
    private const SPIN = 'SPIN';
    private const LTC = 'LTC';

    public function getLabel(): string
    {
        return [
            'MELVIN' => 'Melvin',
            'SPIN' => 'SPIN',
            'LTC' => 'LTC',
        ][$this->getKey()];
    }
}
