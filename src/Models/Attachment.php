<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

class Attachment
{
    public string $name;

    public string $url;

    public function __construct(string $name, string $url)
    {
        $this->name = $name;
        $this->url = $url;
    }
}
