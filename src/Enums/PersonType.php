<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static PersonType CONTRACTOR()
 * @method static PersonType ROADAUTHORITY()
 */
final class PersonType extends Enum
{
    private const CONTRACTOR = 'CONTRACTOR';
    private const ROADAUTHORITY = 'ROADAUTHORITY';

    public function getLabel(): string
    {
        return [
            'CONTRACTOR' => 'Aannemer',
            'ROADAUTHORITY' => '(vaar)wegbeheerder',
        ][$this->getKey()];
    }
}
