<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Api;

use Scraper\ScraperTmdb\Model\TvEpisode;

class TmdbTvEpisodeApi extends AbstractTmdbApi
{
    protected function getType(): string
    {
        return TvEpisode::class;
    }
}
