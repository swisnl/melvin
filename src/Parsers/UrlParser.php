<?php

declare(strict_types=1);

namespace Swis\Melvin\Parsers;

class UrlParser
{
    private const EMPTY_VALUES = [
        '',
        'n.v.t.',
        'n.v.t',
    ];

    public function parse(?string $url): ?string
    {
        if (in_array($url, self::EMPTY_VALUES, true)) {
            return null;
        }

        if (!str_contains($url, '://')) {
            $url = 'https://'.$url;
        }

        return $url;
    }
}
