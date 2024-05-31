<?php

declare(strict_types=1);

namespace Swis\Melvin\Models;

class Contact
{
    public function __construct(
        public int $contactId,
        public string $firstName,
        public string $prefix,
        public string $lastName,
        public string $email,
        public string $phone,
        public ?string $organisation,
        public int $parentSituationId,
        public string $function,
        public string $publicPhone,
        public bool $active,
        public int $createdById,
        public int $changedById
    ) {
    }
}
