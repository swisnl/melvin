<?php

declare(strict_types=1);

namespace Swis\Melvin\Api;

use Swis\Melvin\Client;
use Swis\Melvin\Parsers\AttachmentParser;
use Swis\Melvin\Parsers\ContactParser;
use Swis\Melvin\Parsers\DetourParser;
use Swis\Melvin\Parsers\GeometryParser;
use Swis\Melvin\Parsers\PeriodParser;
use Swis\Melvin\Parsers\RestrictionParser;
use Swis\Melvin\Parsers\SituationParser;
use Swis\Melvin\SituationFilterParameters;

class Situations extends AbstractApi
{
    protected SituationParser $situationParser;

    public function __construct(Client $client, ?SituationParser $situationParser = null)
    {
        parent::__construct($client);

        $geometryParser = new GeometryParser();
        $this->situationParser = $situationParser ?? new SituationParser(
            $geometryParser,
            new PeriodParser(),
            new AttachmentParser(),
            new RestrictionParser($geometryParser),
            new DetourParser($geometryParser),
            new ContactParser()
        );
    }

    /**
     * @return \Swis\Melvin\Models\Situation[]
     */
    public function export(?SituationFilterParameters $parameters = null): array
    {
        $result = $this->getHttpClient()->request('POST', 'export', $parameters);

        $situations = [];
        foreach ($result->features as $feature) {
            $situations[$feature->id][str_replace('EXTERNAL_', '', $feature->properties->type)][] = $feature;
        }

        return array_map(
            function (array $situation) {
                return $this->situationParser->parse(
                    $situation['SITUATION'][0],
                    $situation['RESTRICTION'] ?? [],
                    $situation['DETOUR'] ?? []
                );
            },
            array_values($situations)
        );
    }
}
