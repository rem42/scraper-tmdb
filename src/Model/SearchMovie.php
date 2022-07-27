<?php

namespace Scraper\ScraperTmdb\Model;

class SearchMovie extends AbstractSearch
{
    public function addResult(Movie $movie): self
    {
        $this->results[] = $movie;

        return $this;
    }
}
