<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

class RestrictionExtraInfo
{
    public function __construct(
        public ?bool $passageAllowed,
        public string $description,
    ) {
    }
}
