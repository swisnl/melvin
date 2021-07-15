<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

class LaneInformation
{
    public int $numberOfLanesRestricted;

    public int $numberOfOperationalLanes;

    public int $originalNumberOfLanes;

    public function __construct(int $numberOfLanesRestricted, int $numberOfOperationalLanes, int $originalNumberOfLanes)
    {
        $this->numberOfLanesRestricted = $numberOfLanesRestricted;
        $this->numberOfOperationalLanes = $numberOfOperationalLanes;
        $this->originalNumberOfLanes = $originalNumberOfLanes;
    }
}
