<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

use Swis\Melvin\Enums\RoadAuthorityType;

class RoadAuthority
{
    public function __construct(
        public int $id,
        public ?RoadAuthorityType $type,
        public ?string $name,
    ) {
    }
}
