<?php

namespace Scraper\ScraperTmdb\Tests\Request;

use Scraper\ScraperTmdb\Model\Images;
use Scraper\ScraperTmdb\Model\Tv;
use Scraper\ScraperTmdb\Model\Videos;
use Scraper\ScraperTmdb\Request\TmdbTvRequest;

/**
 * @internal
 */
class TmdbTvRequestTest extends AbtractRequestTest
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
}
