<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

use Swis\Melvin\Enums\RoadAuthorityType;

class RoadAuthority
{
    public int $id;

    public RoadAuthorityType $type;

    public string $name;

    public function __construct(int $id, RoadAuthorityType $type, string $name)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
    }
}
