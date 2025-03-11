<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum Direction: string
{
    case AB = 'A_B';
    case Both = 'BOTH';

    public function getLabel(): string
    {
        return match ($this) {
            self::AB => 'Enkele richting',
            self::Both => 'Beide richtingen',
        };
    }
}
