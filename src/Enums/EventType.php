<?php

declare(strict_types=1);

namespace Swis\Melvin\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static EventType UNKNOWN()
 * @method static EventType FAIR()
 * @method static EventType CONCERT()
 * @method static EventType FESTIVAL()
 * @method static EventType FUNFAIR()
 * @method static EventType MARKET()
 * @method static EventType MARATHON()
 * @method static EventType SPORTSMEETING()
 * @method static EventType FOOTBALLMATCH()
 * @method static EventType BICYCLERACE()
 * @method static EventType WATERSPORTSMEETING()
 * @method static EventType OTHER()
 */
final class EventType extends Enum
{
    private const UNKNOWN = 'UNKNOWN';
    private const FAIR = 'FAIR';
    private const CONCERT = 'CONCERT';
    private const FESTIVAL = 'FESTIVAL';
    private const FUNFAIR = 'FUNFAIR';
    private const MARKET = 'MARKET';
    private const MARATHON = 'MARATHON';
    private const SPORTSMEETING = 'SPORTSMEETING';
    private const FOOTBALLMATCH = 'FOOTBALLMATCH';
    private const BICYCLERACE = 'BICYCLERACE';
    private const WATERSPORTSMEETING = 'WATERSPORTSMEETING';
    private const OTHER = 'OTHER';

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
        ][$this->getKey()];
    }
}
