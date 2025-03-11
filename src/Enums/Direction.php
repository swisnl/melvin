<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum Direction: string
{
    case A_B = 'A_B';
    case BOTH = 'BOTH';

    public function getLabel(): string
    {
        return [
            'A_B' => 'Enkele richting',
            'BOTH' => 'Beide richtingen',
        ][$this->name];
    }
}
