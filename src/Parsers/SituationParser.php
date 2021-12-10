<?php

declare(strict_types=1);

namespace Swis\Melvin\Parsers;

use DateTime;
use stdClass;
use Swis\Melvin\Enums\ActivityType;
use Swis\Melvin\Enums\Delay;
use Swis\Melvin\Enums\EventType;
use Swis\Melvin\Enums\Impact;
use Swis\Melvin\Enums\PersonType;
use Swis\Melvin\Enums\RoadAuthorityType;
use Swis\Melvin\Enums\SituationStatus;
use Swis\Melvin\Enums\Source;
use Swis\Melvin\Enums\WorkObject;
use Swis\Melvin\Enums\WorkType;
use Swis\Melvin\Models\Location;
use Swis\Melvin\Models\Person;
use Swis\Melvin\Models\RoadAuthority;
use Swis\Melvin\Models\Situation;

class SituationParser
{
    protected GeometryParser $geometryParser;

    protected PeriodParser $periodParser;

    protected AttachmentParser $attachmentParser;

    protected RestrictionParser $restrictionParser;

    protected DetourParser $detourParser;

    public function __construct(
        GeometryParser $geometryParser,
        PeriodParser $periodParser,
        AttachmentParser $attachmentParser,
        RestrictionParser $restrictionParser,
        DetourParser $detourParser
    ) {
        $this->geometryParser = $geometryParser;
        $this->periodParser = $periodParser;
        $this->attachmentParser = $attachmentParser;
        $this->restrictionParser = $restrictionParser;
        $this->detourParser = $detourParser;
    }

    public function parse(stdClass $object, array $restrictions, array $detours = []): Situation
    {
        if ($roadAuthority = $object->properties->roadAuthority ?? null) {
            $roadAuthority = new RoadAuthority(
                $roadAuthority->id,
                RoadAuthorityType::from($roadAuthority->type),
                $roadAuthority->name
            );
        }

        if ($createdBy = $object->properties->createdBy ?? null) {
            $createdBy = new Person(
                $createdBy->firstName,
                $createdBy->prefix,
                $createdBy->lastName,
                PersonType::from($createdBy->type)
            );
        }

        if ($lastChangedBy = $object->properties->lastChangedBy ?? null) {
            $lastChangedBy = new Person(
                $lastChangedBy->firstName,
                $lastChangedBy->prefix,
                $lastChangedBy->lastName,
                PersonType::from($lastChangedBy->type)
            );
        }

        $location = new Location(
            $object->properties->location->city,
            $object->properties->location->road,
            $object->properties->location->district,
            $object->properties->location->comment ?? ''
        );

        return new Situation(
            $object->id,
            str_contains($object->properties->type, '_EXTERNAL'),
            $this->geometryParser->parse($object->geometry),
            $this->getName($object),
            $this->getActivityType($object),
            ($object->properties->workObject ?? '') ? WorkObject::from($object->properties->workObject) : null,
            $object->properties->impact !== 'EMPTY' ? Impact::from($object->properties->impact) : null,
            $object->properties->project,
            Source::from($object->properties->source),
            $object->properties->published,
            $object->properties->url ?: null,
            ($object->properties->urlDescription ?? '') ?: null,
            Delay::from($object->properties->delay),
            ($object->properties->workType ?? '') ? WorkType::from($object->properties->workType) : null,
            ($object->properties->eventType ?? '') ? EventType::from($object->properties->eventType) : null,
            ($object->properties->eventName ?? '') ?: null,
            ($object->properties->addition ?? '') ?: null,
            SituationStatus::from($object->properties->status),
            $roadAuthority,
            $location,
            array_map([$this->periodParser, 'parse'], $object->properties->periods, array_keys($object->properties->periods)),
            ($object->properties->createdAt ?? null) ? new DateTime($object->properties->createdAt) : null,
            $createdBy,
            $lastChangedBy,
            array_map([$this->attachmentParser, 'parse'], $object->properties->attachments ?? [], array_keys($object->properties->attachments ?? [])),
            array_map([$this->restrictionParser, 'parse'], $restrictions, array_keys($restrictions)),
            array_map([$this->detourParser, 'parse'], $detours, array_keys($detours))
        );
    }

    protected function getName(stdClass $object): string
    {
        if (property_exists($object->properties, 'name') && trim($object->properties->name)) {
            return trim($object->properties->name);
        }

        $eventName = ($object->properties->eventName ?? '') ?: null;
        $eventType = ($object->properties->eventType ?? '') ? EventType::from($object->properties->eventType) : null;
        $workType = ($object->properties->workType ?? '') ? WorkType::from($object->properties->workType) : null;
        $workObject = ($object->properties->workObject ?? '') ? WorkObject::from($object->properties->workObject) : null;

        $description = '';
        if ($eventName) {
            $description = $eventName;
        } elseif ($eventType) {
            $description = $eventType->getLabel();
        } elseif ($workType) {
            $description = $workType->getLabel();

            if ($workObject) {
                $description = str_replace('...', $workObject->getLabel(), $description);
            }
        }

        return trim(
            preg_replace(
                '/\s+/',
                ' ',
                sprintf(
                    '%s %s %s %s %s',
                    $object->properties->location->road,
                    $object->properties->location->district,
                    $object->properties->location->city,
                    $description,
                    $object->properties->addition ?? ''
                )
            )
        );
    }

    protected function getActivityType(stdClass $object): ActivityType
    {
        $eventType = ($object->properties->eventType ?? '') ? EventType::from($object->properties->eventType) : null;

        if ($eventType) {
            return ActivityType::EVENT();
        }

        return ActivityType::WORK();
    }
}
