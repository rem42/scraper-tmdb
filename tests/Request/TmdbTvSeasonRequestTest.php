<?php

namespace Scraper\ScraperTmdb\Tests\Request;

use Scraper\ScraperTmdb\Model\TvEpisode;
use Scraper\ScraperTmdb\Model\TvSeason;
use Scraper\ScraperTmdb\Request\TmdbTvSeasonRequest;

/**
 * @internal
 */
class TmdbTvSeasonRequestTest extends AbtractRequestTest
{
    public function testTmdbTvRequest(): void
    {
        $client = $this->getClient('season.json');

        $request = new TmdbTvSeasonRequest('apiKey');
        $request
            ->setId(92782)
            ->setSeasonNumber(1)
        ;

        $result = $client->send($request);

        $this->assertInstanceOf(TvSeason::class, $result);
        $this->assertIsArray($result->episodes);
        $this->assertInstanceOf(TvEpisode::class, $result->episodes[0]);
    }
}
