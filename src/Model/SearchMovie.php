<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model;

class SearchMovie extends AbstractSearch
{
    /** @var array<int, MovieSearch> */
    public array $results = [];

    public function addResult(MovieSearch $movie): self
    {
        $this->results[] = $movie;

        return $this;
    }
}
