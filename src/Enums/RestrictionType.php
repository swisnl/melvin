<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static RestrictionType NONE()
 * @method static RestrictionType SPEED()
 * @method static RestrictionType COMPLETE()
 */
final class RestrictionType extends Enum
{
    private const NONE = 'NONE';
    private const SPEED = 'SPEED';
    private const COMPLETE = 'COMPLETE';

    public function getLabel(): string
    {
        return [
            'NONE' => 'Geen verkeersmaatregel noodzakelijk',
            'SPEED' => 'Snelheidsbeperking',
            'COMPLETE' => 'Afsluiting',
        ][$this->getKey()];
    }
}
