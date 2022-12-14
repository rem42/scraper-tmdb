<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Api;

use Scraper\ScraperTmdb\Model\Tv;

class TmdbTvApi extends AbstractTmdbApi
{
    protected function getType(): string
    {
        return Tv::class;
    }
}
