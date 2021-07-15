<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

use Swis\Melvin\Enums\AreaType;

class Area
{
    public int $id;

    public AreaType $type;

    public string $name;

    public function __construct(int $id, AreaType $type, string $name)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
    }
}
