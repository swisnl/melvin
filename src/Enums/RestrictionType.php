<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum RestrictionType: string
{
    case NONE = 'NONE';
    case SPEED = 'SPEED';
    case COMPLETE = 'COMPLETE';

    public function getLabel(): string
    {
        return [
            'NONE' => 'Geen verkeersmaatregel noodzakelijk',
            'SPEED' => 'Snelheidsbeperking',
            'COMPLETE' => 'Afsluiting',
        ][$this->name];
    }
}
