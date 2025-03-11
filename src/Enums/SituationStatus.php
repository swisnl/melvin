<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum SituationStatus: string
{
    case UNKNOWN = 'UNKNOWN';
    case START = 'START';
    case INITIAL = 'INITIAL';
    case CONCEPT = 'CONCEPT';
    case FINAL = 'FINAL';
    case DELETED = 'DELETED';

    public function getLabel(): string
    {
        return match ($this) {
            self::UNKNOWN => '',
            self::START => 'Bij aannemer',
            self::INITIAL => 'Initieel',
            self::CONCEPT => 'Concept',
            self::FINAL => 'Definitief',
            self::DELETED => 'Verwijderd',
        };
    }
}
