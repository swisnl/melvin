<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

class Attachment
{
    public function __construct(
        public string $name,
        public string $url
    ) {
    }
}
