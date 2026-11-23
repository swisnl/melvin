<?php

declare(strict_types=1);

namespace Swis\Melvin\Tests\Parsers;

use PHPUnit\Framework\TestCase;
use Swis\Melvin\Parsers\ContactParser;

final class ContactParserTest extends TestCase
{
    public function testParse(): void
    {
        $contact = (new ContactParser())->parse((object) [
            'name' => 'Jan Jansen',
            'function' => 'Projectleider',
            'email' => 'jan@example.com',
            'organization' => 'Gemeente',
            'phone' => '0612345678',
            'public_phone' => null,
        ]);

        $this->assertSame('Jan Jansen', $contact->name);
        $this->assertSame('Projectleider', $contact->function);
        $this->assertSame('jan@example.com', $contact->email);
        $this->assertSame('Gemeente', $contact->organization);
        $this->assertSame('0612345678', $contact->phone);
        $this->assertNull($contact->publicPhone);
    }

    public function testParseWithNullAttributes(): void
    {
        $contact = (new ContactParser())->parse((object) [
            'name' => 'Jan Jansen',
            'function' => null,
            'email' => null,
            'organization' => null,
            'phone' => null,
            'public_phone' => null,
        ]);

        $this->assertNull($contact->function);
        $this->assertNull($contact->email);
        $this->assertNull($contact->organization);
    }
}
