<?php

declare(strict_types=1);

namespace Swis\Melvin\Parsers;

use Swis\Melvin\Models\Contact;

class ContactParser
{
    public function parse(\stdClass $object): Contact
    {
        return new Contact(
            $object->name,
            $object->function,
            $object->email,
            $object->organization
        );
    }
}
