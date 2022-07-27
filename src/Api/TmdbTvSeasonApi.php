<?php

namespace Scraper\ScraperTmdb\Api;

use Scraper\ScraperTmdb\Model\TvSeason;

class TmdbTvSeasonApi extends AbstractTmdbApi
{
    protected function getType(): string
    {
        return TvSeason::class;
    }
}
