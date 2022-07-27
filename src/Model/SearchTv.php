<?php

namespace Scraper\ScraperTmdb\Model;

class SearchTv extends AbstractSearch
{
    public function addResult(TvSearch $tv): self
    {
        $this->results[] = $tv;

        return $this;
    }
}