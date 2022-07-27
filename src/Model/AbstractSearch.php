<?php

namespace Scraper\ScraperTmdb\Model;

class AbstractSearch
{
    public int $page;
    public int $totalPages;
    public int $totalResults;
    /** @var array<int, object> */
    public array $results = [];
}
