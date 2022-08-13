<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Tests\Request;

use Scraper\ScraperTmdb\Model\Miscellaneous\Crew;
use Scraper\ScraperTmdb\Model\TvEpisode;
use Scraper\ScraperTmdb\Request\TmdbTvEpisodeRequest;

/**
 * @internal
 */
class TmdbTvEpisodeRequestTest extends AbtractRequestTest
{
    public function testTmdbTvEpisodeRequest(): void
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
        $this->assertIsArray($result->crew);
        $this->assertInstanceOf(Crew::class, $result->crew[0]);
        $this->assertIsArray($result->guestStars);
        $this->assertInstanceOf(Crew::class, $result->guestStars[0]);
    }
}
