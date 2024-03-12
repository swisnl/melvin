<?php

declare(strict_types=1);

namespace Swis\Melvin\Api;

use Swis\Melvin\Client;
use Swis\Melvin\Parsers\AreaParser;

class Areas extends AbstractApi
{
    protected AreaParser $areaParser;

    public function __construct(Client $client, ?AreaParser $areaParser = null)
    {
        parent::__construct($client);

        $this->areaParser = $areaParser ?? new AreaParser();
    }

    /**
     * Returns all available areas.
     *
     * @return \Swis\Melvin\Models\Area[]
     */
    public function all(): array
    {
        return array_map(
            [$this->areaParser, 'parse'],
            $this->getHttpClient()->request('GET', 'area/all')
        );
    }
}
