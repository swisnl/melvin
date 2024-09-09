<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

class Week
{
    public function __construct(
        public bool $monday,
        public bool $tuesday,
        public bool $wednesday,
        public bool $thursday,
        public bool $friday,
        public bool $saturday,
        public bool $sunday,
    ) {
    }
}
