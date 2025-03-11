<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum PersonType: string
{
    case Contractor = 'CONTRACTOR';
    case Roadauthority = 'ROADAUTHORITY';

    public function getLabel(): string
    {
        return match ($this) {
            self::Contractor => 'Aannemer',
            self::Roadauthority => '(vaar)wegbeheerder',
        };
    }
}
