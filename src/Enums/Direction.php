<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static Direction A_B()
 * @method static Direction BOTH()
 */
final class Direction extends Enum
{
    private const A_B = 'A_B';
    private const BOTH = 'BOTH';

    public function getLabel(): string
    {
        return [
            'A_B' => 'Enkele richting',
            'BOTH' => 'Beide richtingen',
        ][$this->getKey()];
    }
}
