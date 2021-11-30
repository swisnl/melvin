<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

use DateTime;
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
    public string $id;

    public bool $external;

    public Geometry $geometry;

    public string $name;

    public ?ActivityType $activityType;

    public ?WorkObject $workObject;

    public ?Impact $impact;

    public bool $project;

    public Source $source;

    public bool $published;

    public ?string $url;

    public ?string $urlDescription;

    public Delay $delay;

    public ?WorkType $workType;

    public ?EventType $eventType;

    public ?string $eventName;

    public ?string $addition;

    public SituationStatus $status;

    public ?RoadAuthority $roadAuthority;

    public Location $location;

    /**
     * @var \Swis\Melvin\Models\Period[]
     */
    public array $periods;

    public ?DateTime $createdAt;

    public ?Person $createdBy;

    public ?Person $lastChangedBy;

    /**
     * @var \Swis\Melvin\Models\Attachment[]
     */
    public array $attachments;

    /**
     * @var \Swis\Melvin\Models\Restriction[]
     */
    public array $restrictions;

    /**
     * @var \Swis\Melvin\Models\Detour[]
     */
    public array $detours;

    public function __construct(
        string $id,
        bool $external,
        Geometry $geometry,
        string $name,
        ?ActivityType $activityType,
        ?WorkObject $workObject,
        ?Impact $impact,
        bool $project,
        Source $source,
        bool $published,
        ?string $url,
        ?string $urlDescription,
        Delay $delay,
        ?WorkType $workType,
        ?EventType $eventType,
        ?string $eventName,
        ?string $addition,
        SituationStatus $status,
        ?RoadAuthority $roadAuthority,
        Location $location,
        array $periods,
        ?DateTime $createdAt,
        ?Person $createdBy,
        ?Person $lastChangedBy,
        array $attachments,
        array $restrictions,
        array $detours
    ) {
        $this->id = $id;
        $this->external = $external;
        $this->geometry = $geometry;
        $this->name = $name;
        $this->activityType = $activityType;
        $this->workObject = $workObject;
        $this->impact = $impact;
        $this->project = $project;
        $this->source = $source;
        $this->published = $published;
        $this->url = $url;
        $this->urlDescription = $urlDescription;
        $this->delay = $delay;
        $this->workType = $workType;
        $this->eventType = $eventType;
        $this->eventName = $eventName;
        $this->addition = $addition;
        $this->status = $status;
        $this->roadAuthority = $roadAuthority;
        $this->location = $location;
        $this->periods = $periods;
        $this->createdAt = $createdAt;
        $this->createdBy = $createdBy;
        $this->lastChangedBy = $lastChangedBy;
        $this->attachments = $attachments;
        $this->restrictions = $restrictions;
        $this->detours = $detours;
    }
}
