<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum PersonType: string
{
    case CONTRACTOR = 'CONTRACTOR';
    case ROADAUTHORITY = 'ROADAUTHORITY';

    public function getLabel(): string
    {
        return [
            'CONTRACTOR' => 'Aannemer',
            'ROADAUTHORITY' => '(vaar)wegbeheerder',
        ][$this->name];
    }
}
