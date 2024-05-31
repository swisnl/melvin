<?php

declare(strict_types=1);

namespace Swis\Melvin\Tests\Schema;

use Opis\JsonSchema\Errors\ErrorFormatter;
use Opis\JsonSchema\Validator;
use PHPUnit\Framework\TestCase;

final class SituationsTest extends TestCase
{
    private const SCHEMA_ID = 'https://github.com/swisnl/melvin/schema.json';

    public function testSituations(): void
    {
        $validator = new Validator();
        $validator->setMaxErrors(10);
        $validator->resolver()->registerFile(self::SCHEMA_ID, 'tests/_files/situations-schema.json');

        $data = file_get_contents('tests/_fixtures/melvin.ndw.nu/melvinservice/rest/export.post.mock');
        $data = json_decode($data, false, 512, JSON_THROW_ON_ERROR);

        $result = $validator->validate($data, self::SCHEMA_ID);

        $message = '';
        if (!$result->isValid()) {
            $message = sprintf(
                "Validation errors:\n%s",
                json_encode(
                    (new ErrorFormatter())->format($result->error()),
                    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR
                )
            );
        }

        $this->assertTrue($result->isValid(), $message);
    }
}
