<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

class Location
{
    public function __construct(
        public string $city,
        public string $road,
        public ?string $district,
        public string $comment,
    ) {
    }
}
