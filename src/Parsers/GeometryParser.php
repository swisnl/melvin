<?php

declare(strict_types=1);

namespace Swis\Melvin\Parsers;

use GeoJson\Exception\Exception as GeoJsonException;
use GeoJson\GeoJson;
use GeoJson\Geometry\Geometry;
use InvalidArgumentException;
use stdClass;
use Swis\Melvin\Exceptions\ParseException;

class GeometryParser
{
    public function parse(stdClass $object): Geometry
    {
        if ($object->type === 'MultiLineString') {
            $object->coordinates = array_values(
                array_filter($object->coordinates, fn ($array) => !empty($array))
            );

            if (count($object->coordinates) === 1) {
                $object->type = 'LineString';
                $object->coordinates = $object->coordinates[0];
            }
        }

        try {
            return GeoJson::jsonUnserialize($object);
        } catch (GeoJsonException|InvalidArgumentException $e) {
            throw new ParseException('Failed to parse geometry', 0, $e);
        }
    }
}
