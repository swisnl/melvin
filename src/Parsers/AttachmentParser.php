<?php

declare(strict_types=1);

namespace Swis\Melvin\Parsers;

use Swis\Melvin\Models\Attachment;

class AttachmentParser
{
    public function parse(\stdClass $object): Attachment
    {
        return new Attachment(
            $object->name,
            $object->url
        );
    }
}
