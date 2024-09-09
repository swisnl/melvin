<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

class VehicleInformation
{
    public function __construct(
        public ?float $heightCharacteristic,
        public ?float $lengthCharacteristic,
        public ?float $widthCharacteristic,
        public ?float $grossWeightCharacteristic,
    ) {
    }
}
