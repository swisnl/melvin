<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum Impact: string
{
    case NONE = 'NONE';
    case LITTLE = 'LITTLE';
    case AVERAGE = 'AVERAGE';
    case BIG = 'BIG';
    case HUGE = 'HUGE';

    public function getLabel(): string
    {
        return [
            'NONE' => 'Geen hinder',
            'LITTLE' => 'Kleine hinder',
            'AVERAGE' => 'Matige hinder',
            'BIG' => 'Grote hinder',
            'HUGE' => 'Zeer grote hinder',
        ][$this->name];
    }
}
