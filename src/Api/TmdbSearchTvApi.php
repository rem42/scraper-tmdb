<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Api;

use Scraper\ScraperTmdb\Model\SearchTv;

class TmdbSearchTvApi extends AbstractTmdbApi
{
    protected function getType(): string
    {
        return SearchTv::class;
    }
}
