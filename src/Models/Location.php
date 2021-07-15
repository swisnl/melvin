<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

class Location
{
    public string $city;

    public string $road;

    public string $district;

    public string $comment;

    public function __construct(string $city, string $road, string $district, string $comment)
    {
        $this->city = $city;
        $this->road = $road;
        $this->district = $district;
        $this->comment = $comment;
    }
}
