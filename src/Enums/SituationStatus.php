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
        return [
            'UNKNOWN' => '',
            'START' => 'Bij aannemer',
            'INITIAL' => 'Initieel',
            'CONCEPT' => 'Concept',
            'FINAL' => 'Definitief',
            'DELETED' => 'Verwijderd',
        ][$this->name];
    }
}
