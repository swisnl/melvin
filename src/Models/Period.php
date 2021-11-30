<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

use DateTime;
use Swis\Melvin\Enums\PeriodStatus;

class Period
{
    public int $id;

    public string $name;

    public DateTime $startDate;

    public ?DateTime $endDate;

    public bool $repeating;

    public ?Week $repeatingAt;

    public ?PeriodStatus $status;

    public ?bool $overrunning;

    public int $order;

    public ?int $parentId;

    public function __construct(
        int $id,
        string $name,
        DateTime $startDate,
        ?DateTime $endDate,
        bool $repeating,
        ?Week $repeatingAt,
        ?PeriodStatus $status,
        ?bool $overrunning,
        int $order,
        ?int $parentId
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->repeating = $repeating;
        $this->repeatingAt = $repeatingAt;
        $this->status = $status;
        $this->overrunning = $overrunning;
        $this->order = $order;
        $this->parentId = $parentId;
    }
}
