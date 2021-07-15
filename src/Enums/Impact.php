<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static Impact NONE()
 * @method static Impact LITTLE()
 * @method static Impact AVERAGE()
 * @method static Impact BIG()
 * @method static Impact HUGE()
 */
final class Impact extends Enum
{
    private const NONE = 'NONE';
    private const LITTLE = 'LITTLE';
    private const AVERAGE = 'AVERAGE';
    private const BIG = 'BIG';
    private const HUGE = 'HUGE';

    public function getLabel(): string
    {
        return [
            'NONE' => 'Geen hinder',
            'LITTLE' => 'Kleine hinder',
            'AVERAGE' => 'Matige hinder',
            'BIG' => 'Grote hinder',
            'HUGE' => 'Zeer grote hinder',
        ][$this->getKey()];
    }
}
