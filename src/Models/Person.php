<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

use Swis\Melvin\Enums\PersonType;

class Person
{
    public function __construct(
        public string $firstName,
        public ?string $prefix,
        public string $lastName,
        public PersonType $type,
    ) {
    }
}
