<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model;

class SearchTv extends AbstractSearch
{
    /** @var array<int, TvSearch> */
    public array $results = [];

    public function addResult(TvSearch $tv): self
    {
        $this->results[] = $tv;

        return $this;
    }
}
