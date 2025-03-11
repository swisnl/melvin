<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

enum EventType: string
{
    case UNKNOWN = 'UNKNOWN';
    case FAIR = 'FAIR';
    case CONCERT = 'CONCERT';
    case FESTIVAL = 'FESTIVAL';
    case FUNFAIR = 'FUNFAIR';
    case MARKET = 'MARKET';
    case MARATHON = 'MARATHON';
    case SPORTSMEETING = 'SPORTSMEETING';
    case FOOTBALLMATCH = 'FOOTBALLMATCH';
    case BICYCLERACE = 'BICYCLERACE';
    case WATERSPORTSMEETING = 'WATERSPORTSMEETING';
    case OTHER = 'OTHER';

    public function getLabel(): string
    {
        return match ($this) {
            self::UNKNOWN => '',
            self::FAIR => 'Braderie',
            self::CONCERT => 'Concert',
            self::FESTIVAL => 'Festival',
            self::FUNFAIR => 'Kermis',
            self::MARKET => 'Markt',
            self::MARATHON => 'Marathon',
            self::SPORTSMEETING => 'Sportevenement',
            self::FOOTBALLMATCH => 'Voetbalwedstrijd',
            self::BICYCLERACE => 'Wielerronde',
            self::WATERSPORTSMEETING => 'Watersport evenement',
            self::OTHER => 'Overig',
        };
    }
}
