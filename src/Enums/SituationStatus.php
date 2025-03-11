<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum SituationStatus: string
{
    case Unknown = 'UNKNOWN';
    case Start = 'START';
    case Initial = 'INITIAL';
    case Concept = 'CONCEPT';
    case Final = 'FINAL';
    case Deleted = 'DELETED';

    public function getLabel(): string
    {
        return match ($this) {
            self::Unknown => '',
            self::Start => 'Bij aannemer',
            self::Initial => 'Initieel',
            self::Concept => 'Concept',
            self::Final => 'Definitief',
            self::Deleted => 'Verwijderd',
        };
    }
}
