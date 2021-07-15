<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

use Swis\Melvin\Enums\PersonType;

class Person
{
    public string $firstName;

    public string $prefix;

    public string $lastName;

    public PersonType $type;

    public function __construct(string $firstName, string $prefix, string $lastName, PersonType $type)
    {
        $this->firstName = $firstName;
        $this->prefix = $prefix;
        $this->lastName = $lastName;
        $this->type = $type;
    }
}
