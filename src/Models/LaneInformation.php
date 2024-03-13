<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

class LaneInformation
{
    public function __construct(
        public int $numberOfLanesRestricted,
        public int $numberOfOperationalLanes,
        public int $originalNumberOfLanes
    ) {
    }
}
