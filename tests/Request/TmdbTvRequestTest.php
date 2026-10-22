<?php

declare(strict_types=1);

namespace Scraper\ScraperTmdb\Tests\Request;

use Scraper\ScraperTmdb\Model\Miscellaneous\Images;
use Scraper\ScraperTmdb\Model\Tv;
use Scraper\ScraperTmdb\Model\Videos;
use Scraper\ScraperTmdb\Request\TmdbTvRequest;

/**
 * @internal
 */
class TmdbTvRequestTest extends AbstractRequestTestCase
{
    public function testTmdbTvRequest(): void
    {
        $client = $this->getClient('tv.json');

        $request = new TmdbTvRequest('apiKey');
        $request
            ->setId(92782)
        ;

        $result = $client->send($request);

        $this->assertInstanceOf(Tv::class, $result);
        $this->assertInstanceOf(Images::class, $result->images);
        $this->assertInstanceOf(Videos::class, $result->videos);
    }

    public function testTmdbTvRequestWithoutAirDates(): void
    {
        $client = $this->getClient('tv_upcoming.json');

        $request = new TmdbTvRequest('apiKey');
        $request
            ->setId(224377)
        ;

        $result = $client->send($request);

        $this->assertInstanceOf(Tv::class, $result);
        $this->assertNull($result->firstAirDate);
        $this->assertNull($result->lastAirDate);
        $this->assertNull($result->seasons[0]->airDate);
    }
}
