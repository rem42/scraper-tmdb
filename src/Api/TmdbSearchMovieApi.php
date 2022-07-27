<?php

namespace Scraper\ScraperTmdb\Api;


use Scraper\ScraperTmdb\Model\SearchMovie;

class TmdbSearchMovieApi extends AbstractTmdbApi
{
    protected function getType(): string
    {
        return SearchMovie::class;
    }
}
