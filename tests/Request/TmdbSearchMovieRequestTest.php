<?php

namespace Scraper\ScraperTmdb\Tests\Request;

use Scraper\ScraperTmdb\Model\Movie;
use Scraper\ScraperTmdb\Model\SearchMovie;
use Scraper\ScraperTmdb\Request\TmdbSearchMovieRequest;

/**
 * @internal
 */
class TmdbSearchMovieRequestTest extends AbtractRequestTest
{
    public function testTmdbSearchMovieRequest(): void
    {
        $client = $this->getClient('search_movie.json');

        $request = new TmdbSearchMovieRequest('apiKey');
        $request
            ->setQuery('marvel')
            ->setlanguage('fr')
        ;

        $result = $client->send($request);

        $this->assertInstanceOf(SearchMovie::class, $result);
        $this->assertIsArray($result->results);
        $this->assertInstanceOf(Movie::class, $result->results[0]);
    }
}
