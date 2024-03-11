<?php

declare(strict_types=1);

namespace Swis\Melvin\Parsers;

use Swis\Melvin\Enums\PeriodStatus;
use Swis\Melvin\Models\Period;
use Swis\Melvin\Models\Week;

class PeriodParser
{
    public function parse(\stdClass $object, int $index, int $situationId): Period
    {
        if ($repeatingAt = $object->repeatingAt ?? null) {
            $repeatingAt = new Week(
                $repeatingAt[0],
                $repeatingAt[1],
                $repeatingAt[2],
                $repeatingAt[3],
                $repeatingAt[4],
                $repeatingAt[5],
                $repeatingAt[6]
            );
        }
        return new Period(
            $object->id ?? $situationId,
            ($object->name ?? '') ?: sprintf('Uitvoerperiode %d', $index + 1),
            new \DateTime($object->startDateActual ?? $object->startDate, new \DateTimeZone('UTC')),
            ($endDate = $object->endDateActual ?? $object->endDate ?? null) ? new \DateTime($endDate, new \DateTimeZone('UTC')) : null,
            ($object->repeating ?? '') === 'WEEKLY',
            $repeatingAt,
            ($object->status ?? null) ? PeriodStatus::from($object->status) : null,
            $object->overrunning ?? null,
            $object->order ?? $index,
            $object->parentId ?? null
        );
    }
}
