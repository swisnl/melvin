<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

class VehicleInformation
{
    public ?float $heightCharacteristic;

    public ?float $lengthCharacteristic;

    public function __construct(?float $heightCharacteristic, ?float $lengthCharacteristic)
    {
        $this->heightCharacteristic = $heightCharacteristic;
        $this->lengthCharacteristic = $lengthCharacteristic;
    }
}
