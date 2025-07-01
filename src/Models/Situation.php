<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

use GeoJson\Geometry\Geometry;
use Swis\Melvin\Enums\ActivityType;
use Swis\Melvin\Enums\Delay;
use Swis\Melvin\Enums\EventType;
use Swis\Melvin\Enums\Impact;
use Swis\Melvin\Enums\SituationStatus;
use Swis\Melvin\Enums\Source;
use Swis\Melvin\Enums\WorkObject;
use Swis\Melvin\Enums\WorkType;

class Situation
{
    public function __construct(
        public string $id,
        public bool $external,
        public ?Geometry $geometry,
        public string $name,
        public ?ActivityType $activityType,
        public ?WorkObject $workObject,
        public ?Impact $impact,
        public ?string $impactDescription,
        public bool $project,
        public Source $source,
        public bool $published,
        public ?string $url,
        public ?string $urlDescription,
        public Delay $delay,
        public ?WorkType $workType,
        public ?EventType $eventType,
        public ?string $eventName,
        public ?string $addition,
        public SituationStatus $status,
        public ?RoadAuthority $roadAuthority,
        public Location $location,
        /**
         * @var \Swis\Melvin\Models\Period[]
         */
        public array $periods,
        public ?\DateTime $createdAt,
        public ?Person $createdBy,
        public ?\DateTime $lastChangedAt,
        public ?Person $lastChangedBy,
        /**
         * @var \Swis\Melvin\Models\Attachment[]
         */
        public array $attachments,
        /**
         * @var \Swis\Melvin\Models\Restriction[]
         */
        public array $restrictions,
        /**
         * @var \Swis\Melvin\Models\Detour[]
         */
        public array $detours,
        public ?string $permitId,
        public ?string $referenceId,
        /**
         * @var string[]
         */
        public array $remarks,
        /**
         * @var \Swis\Melvin\Models\Contact[]
         */
        public array $contacts,
    ) {
    }
}
