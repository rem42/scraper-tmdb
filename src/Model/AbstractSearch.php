<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model;

class AbstractSearch
{
    public int $page;
    public int $totalPages;
    public int $totalResults;
    /* @phpstan-ignore-next-line */
    public array $results = [];
}
