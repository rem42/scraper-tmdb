<?php

namespace Scraper\ScraperTmdb\Request;

use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\RequestQuery;
use Scraper\Scraper\Request\ScraperRequest;

/**
 * @Scraper(host="api.themoviedb.org", scheme="HTTPS", method="GET", path="3/")
 */
abstract class TmdbRequest extends ScraperRequest implements RequestQuery
{
    /** @var array<string, int|string> */
    protected array $parameters = [];

    public function __construct(
        protected string $apiKey
    ) {
    }

    public function getQuery(): array
    {
        return array_merge(
            ['api_key' => $this->apiKey],
            $this->parameters
        );
    }

    public function setAppendToResponse(array $list): self {
        $this->parameters['append_to_response'] = implode(',', $list);

        return $this;
    }
}
