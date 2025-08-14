<?php

declare(strict_types=1);

namespace Swis\Melvin\Parsers;

use Swis\Melvin\Models\Contact;

class ContactParser
{
    public function parse(\stdClass $object): Contact
    {
        return new Contact(
            $object->contactId ?? null,
            $object->firstName ?? null,
            $object->prefix ?? null,
            $object->lastName ?? null,
            $object->email,
            $object->phone,
            $object->organisation ?? $object->organization,
            $object->parentSituationId ?? null,
            $object->function,
            $object->publicPhone ?? null,
            $object->active ?? null,
            $object->createdById ?? null,
            $object->changedById ?? null
        );
    }
}
