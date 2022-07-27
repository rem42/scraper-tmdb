<?php

namespace Scraper\ScraperTmdb\Tests\Request;

use Scraper\ScraperTmdb\Model\SearchTv;
use Scraper\ScraperTmdb\Model\Tv;
use Scraper\ScraperTmdb\Request\TmdbSearchTvRequest;

/**
 * @internal
 */
class TmdbSearchTvRequestTest extends AbtractRequestTest
{
    public function testTmdbSearchTvRequest(): void
    {
        $client = $this->getClient('search_tv.json');

        $request = new TmdbSearchTvRequest('apiKey');
        $request
            ->setQuery('marvel')
            ->setlanguage('fr')
        ;

        $result = $client->send($request);

        $this->assertInstanceOf(SearchTv::class, $result);
        $this->assertIsArray($result->results);
        $this->assertInstanceOf(Tv::class, $result->results[0]);
    }
}
