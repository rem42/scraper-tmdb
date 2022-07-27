<?php

namespace Scraper\ScraperTmdb\Model;

class AbstractSearch
{
    public int $page;
    public int $totalPages;
    public int $totalResults;
    public array $results = [];
}
