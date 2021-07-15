<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

class VehicleInformation
{
    public ?float $heightCharacteristic;

    public ?int $lengthCharacteristic;

    public function __construct(?float $heightCharacteristic, ?int $lengthCharacteristic)
    {
        $this->heightCharacteristic = $heightCharacteristic;
        $this->lengthCharacteristic = $lengthCharacteristic;
    }
}
