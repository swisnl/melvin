<?php

declare(strict_types=1);

namespace Swis\Melvin\Parsers;

use stdClass;
use Swis\Melvin\Enums\AreaType;
use Swis\Melvin\Models\Area;

class AreaParser
{
    public function parse(stdClass $object): Area
    {
        return new Area(
            $object->id,
            AreaType::from($object->type),
            $object->name
        );
    }
}
