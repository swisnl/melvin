<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

use Swis\Melvin\Enums\Source;

class RelatedSituation
{
    public function __construct(
        public int $id,
        public bool $project,
        public Source $source,
    ) {
    }
}
