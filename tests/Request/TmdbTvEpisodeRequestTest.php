<?php

namespace Scraper\ScraperTmdb\Tests\Request;

use Scraper\ScraperTmdb\Model\TvEpisode;
use Scraper\ScraperTmdb\Request\TmdbTvEpisodeRequest;

/**
 * @internal
 */
class TmdbTvEpisodeRequestTest extends AbtractRequestTest
{
    public function testTmdbTvRequest(): void
    {
        $client = $this->getClient('episode.json');

        $request = new TmdbTvEpisodeRequest('apiKey');
        $request
            ->setId(92782)
            ->setSeasonNumber(1)
            ->setEpisodeNumber(1)
        ;

        $result = $client->send($request);

        $this->assertInstanceOf(TvEpisode::class, $result);
    }
}
