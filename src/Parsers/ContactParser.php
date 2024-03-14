<?php

declare(strict_types=1);

namespace Swis\Melvin\Parsers;

use Swis\Melvin\Models\Contact;

class ContactParser
{
    public function parse(\stdClass $object): Contact
    {
        return new Contact(
            $object->contactId,
            $object->firstName,
            $object->prefix,
            $object->lastName,
            $object->email,
            $object->phone,
            $object->organisation ?? $object->organization,
            $object->parentSituationId,
            $object->function,
            $object->publicPhone,
            $object->active,
            $object->createdById
        );
    }
}
