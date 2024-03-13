<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

use Swis\Melvin\Enums\PeriodStatus;

class Period
{
    public function __construct(
        public int $id,
        public string $name,
        public \DateTime $startDate,
        public ?\DateTime $endDate,
        public bool $repeating,
        public ?Week $repeatingAt,
        public ?PeriodStatus $status,
        public ?bool $overrunning,
        public int $order,
        public ?int $parentId
    ) {
    }
}
