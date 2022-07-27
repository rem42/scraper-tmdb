<?php

namespace Scraper\ScraperTmdb\Api;

use Scraper\ScraperTmdb\Model\Movie;

class TmdbMovieApi extends AbstractTmdbApi
{
    protected function getType(): string
    {
        return Movie::class;
    }
}
