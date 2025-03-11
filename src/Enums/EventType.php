<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum EventType: string
{
    case Unknown = 'UNKNOWN';
    case Fair = 'FAIR';
    case Concert = 'CONCERT';
    case Festival = 'FESTIVAL';
    case Funfair = 'FUNFAIR';
    case Market = 'MARKET';
    case Marathon = 'MARATHON';
    case Sportsmeeting = 'SPORTSMEETING';
    case Footballmatch = 'FOOTBALLMATCH';
    case Bicyclerace = 'BICYCLERACE';
    case Watersportsmeeting = 'WATERSPORTSMEETING';
    case Other = 'OTHER';

    public function getLabel(): string
    {
        return match ($this) {
            self::Unknown => '',
            self::Fair => 'Braderie',
            self::Concert => 'Concert',
            self::Festival => 'Festival',
            self::Funfair => 'Kermis',
            self::Market => 'Markt',
            self::Marathon => 'Marathon',
            self::Sportsmeeting => 'Sportevenement',
            self::Footballmatch => 'Voetbalwedstrijd',
            self::Bicyclerace => 'Wielerronde',
            self::Watersportsmeeting => 'Watersport evenement',
            self::Other => 'Overig',
        };
    }
}
