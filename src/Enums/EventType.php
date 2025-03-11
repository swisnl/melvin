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
        return [
            'UNKNOWN' => '',
            'FAIR' => 'Braderie',
            'CONCERT' => 'Concert',
            'FESTIVAL' => 'Festival',
            'FUNFAIR' => 'Kermis',
            'MARKET' => 'Markt',
            'MARATHON' => 'Marathon',
            'SPORTSMEETING' => 'Sportevenement',
            'FOOTBALLMATCH' => 'Voetbalwedstrijd',
            'BICYCLERACE' => 'Wielerronde',
            'WATERSPORTSMEETING' => 'Watersport evenement',
            'OTHER' => 'Overig',
        ][$this->name];
    }
}
