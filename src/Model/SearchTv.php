<?php

namespace Scraper\ScraperTmdb\Model;

class SearchTv extends AbstractSearch
{
    public function addResult(Tv $tv): self
    {
        $this->results[] = $tv;

        return $this;
    }
}
