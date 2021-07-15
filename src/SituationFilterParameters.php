<?php

declare(strict_types=1);

namespace Swis\Melvin;

use DateTimeInterface;
use JsonSerializable;
use Swis\Melvin\Enums\ActivityType;
use Swis\Melvin\Enums\RestrictionType;
use Swis\Melvin\Enums\SituationStatus;
use Swis\Melvin\Enums\Source;
use Swis\Melvin\Exceptions\InvalidArgumentException;

class SituationFilterParameters implements JsonSerializable
{
    protected ?DateTimeInterface $startPeriod = null;

    protected ?DateTimeInterface $endPeriod = null;

    /**
     * @var \Swis\Melvin\Enums\Source[]|null
     */
    protected ?array $sources = null;

    /**
     * @var int[]|null
     */
    protected ?array $areaIds = null;

    protected ?int $areaBuffer = null;

    /**
     * @var \Swis\Melvin\Enums\SituationStatus[]|null
     */
    protected ?array $statuses = null;

    protected ?bool $published = null;

    protected ?bool $rvmConflict = null;

    /**
     * @var \Swis\Melvin\Enums\RestrictionType[]|null
     */
    protected ?array $restrictionTypes = null;

    /**
     * @var \Swis\Melvin\Enums\ActivityType[]|null
     */
    protected ?array $activityTypes = null;

    protected ?bool $includeDetours = null;

    /**
     * @param \DateTimeInterface $start
     * @param \DateTimeInterface $end
     *
     * @return $this
     */
    public function setPeriod(DateTimeInterface $start, DateTimeInterface $end): self
    {
        $this->startPeriod = $start;
        $this->endPeriod = $end;

        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriod(): self
    {
        $this->startPeriod = $this->endPeriod = null;

        return $this;
    }

    /**
     * @param \Swis\Melvin\Enums\Source[] $sources
     *
     * @return $this
     */
    public function setSources(array $sources): self
    {
        $this->validateEnums($sources, Source::class, 'sources');

        $this->sources = $sources;

        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSources(): self
    {
        $this->sources = null;

        return $this;
    }

    /**
     * @param int[] $areaIds
     *
     * @return $this
     */
    public function setAreaIds(array $areaIds): self
    {
        $this->validateTypes($areaIds, 'integer', 'areaIds');

        $this->areaIds = $areaIds;

        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAreaIds(): self
    {
        $this->areaIds = null;

        return $this;
    }

    /**
     * @param int $areaBuffer
     *
     * @return $this
     */
    public function setAreaBuffer(int $areaBuffer): self
    {
        $this->areaBuffer = $areaBuffer;

        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAreaBuffer(): self
    {
        $this->areaBuffer = null;

        return $this;
    }

    /**
     * @param \Swis\Melvin\Enums\SituationStatus[] $statuses
     *
     * @return $this
     */
    public function setStatuses(array $statuses): self
    {
        $this->validateEnums($statuses, SituationStatus::class, 'statuses');

        $this->statuses = $statuses;

        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatuses(): self
    {
        $this->statuses = null;

        return $this;
    }

    /**
     * @param bool $published
     *
     * @return $this
     */
    public function setPublished(bool $published): self
    {
        $this->published = $published;

        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPublished(): self
    {
        $this->published = null;

        return $this;
    }

    /**
     * @param bool $rvmConflict
     *
     * @return $this
     */
    public function setRvmConflict(bool $rvmConflict): self
    {
        $this->rvmConflict = $rvmConflict;

        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRvmConflict(): self
    {
        $this->rvmConflict = null;

        return $this;
    }

    /**
     * @param \Swis\Melvin\Enums\RestrictionType[] $restrictionTypes
     *
     * @return $this
     */
    public function setRestrictionTypes(array $restrictionTypes): self
    {
        $this->validateEnums($restrictionTypes, RestrictionType::class, 'restrictionTypes');

        $this->restrictionTypes = $restrictionTypes;

        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictionTypes(): self
    {
        $this->restrictionTypes = null;

        return $this;
    }

    /**
     * @param \Swis\Melvin\Enums\ActivityType[] $activityTypes
     *
     * @return $this
     */
    public function setActivityTypes(array $activityTypes): self
    {
        $this->validateEnums($activityTypes, ActivityType::class, 'activityTypes');

        $this->activityTypes = $activityTypes;

        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivityTypes(): self
    {
        $this->activityTypes = null;

        return $this;
    }

    /**
     * @param bool $includeDetours
     *
     * @return $this
     */
    public function setIncludeDetours(bool $includeDetours): self
    {
        $this->includeDetours = $includeDetours;

        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeDetours(): self
    {
        $this->includeDetours = null;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return array_filter(
            [
                'startPeriod' => $this->startPeriod ? $this->startPeriod->format(DateTimeInterface::ATOM) : null,
                'endPeriod' => $this->endPeriod ? $this->endPeriod->format(DateTimeInterface::ATOM) : null,
                'sources' => $this->sources,
                'areaIds' => $this->areaIds,
                'areaBuffer' => $this->areaBuffer,
                'statuses' => $this->statuses,
                'published' => $this->published,
                'rvmConflict' => $this->rvmConflict,
                'restrictionTypes' => $this->restrictionTypes,
                'activityTypes' => $this->activityTypes,
                'includeDetours' => $this->includeDetours,
            ],
            fn ($value) => $value !== null
        );
    }

    protected function validateEnums(array $values, string $expectedEnum, string $name): void
    {
        foreach ($values as $value) {
            if (!$value instanceof $expectedEnum) {
                throw new InvalidArgumentException(
                    sprintf(
                        'All %s must be an instance of %s, %s provided.',
                        $name,
                        $expectedEnum,
                        is_object($value) ? get_class($value) : gettype($value)
                    )
                );
            }
        }
    }

    protected function validateTypes(array $values, string $expectedType, string $name): void
    {
        foreach ($values as $value) {
            if (gettype($value) !== $expectedType) {
                throw new InvalidArgumentException(
                    sprintf(
                        'All %s must be an %s, %s (%s) provided.',
                        $name,
                        $expectedType,
                        $value,
                        gettype($value)
                    )
                );
            }
        }
    }
}
