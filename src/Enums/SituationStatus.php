<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static SituationStatus UNKNOWN()
 * @method static SituationStatus START()
 * @method static SituationStatus INITIAL()
 * @method static SituationStatus CONCEPT()
 * @method static SituationStatus FINAL()
 * @method static SituationStatus DELETED()
 */
final class SituationStatus extends Enum
{
    private const UNKNOWN = 'UNKNOWN';
    private const START = 'START';
    private const INITIAL = 'INITIAL';
    private const CONCEPT = 'CONCEPT';
    private const FINAL = 'FINAL';
    private const DELETED = 'DELETED';

    public function getLabel(): string
    {
        return [
            'UNKNOWN' => '',
            'START' => 'Bij aannemer',
            'INITIAL' => 'Initieel',
            'CONCEPT' => 'Concept',
            'FINAL' => 'Definitief',
            'DELETED' => 'Verwijderd',
        ][$this->getKey()];
    }
}
