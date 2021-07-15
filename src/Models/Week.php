<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

class Week
{
    public bool $monday;

    public bool $tuesday;

    public bool $wednesday;

    public bool $thursday;

    public bool $friday;

    public bool $saturday;

    public bool $sunday;

    public function __construct(
        bool $monday,
        bool $tuesday,
        bool $wednesday,
        bool $thursday,
        bool $friday,
        bool $saturday,
        bool $sunday
    ) {
        $this->monday = $monday;
        $this->tuesday = $tuesday;
        $this->wednesday = $wednesday;
        $this->thursday = $thursday;
        $this->friday = $friday;
        $this->saturday = $saturday;
        $this->sunday = $sunday;
    }
}
