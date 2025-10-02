<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

class Contact
{
    public function __construct(
        public string $name,
        public string $function,
        public string $email,
        public string $organization,
    ) {
    }
}
