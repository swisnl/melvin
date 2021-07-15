<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

class RestrictionExtraInfo
{
    public ?bool $passageAllowed;

    public string $description;

    public function __construct(?bool $passageAllowed, string $description)
    {
        $this->passageAllowed = $passageAllowed;
        $this->description = $description;
    }
}
