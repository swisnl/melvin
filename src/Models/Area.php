<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

use Swis\Melvin\Enums\AreaType;

class Area
{
    public function __construct(
        public int $id,
        public AreaType $type,
        public string $name,
    ) {
    }
}
