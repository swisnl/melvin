<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum Source: string
{
    case MELVIN = 'MELVIN';
    case SPIN = 'SPIN';
    case LTC = 'LTC';

    public function getLabel(): string
    {
        return [
            'MELVIN' => 'Melvin',
            'SPIN' => 'SPIN',
            'LTC' => 'LTC',
        ][$this->name];
    }
}
