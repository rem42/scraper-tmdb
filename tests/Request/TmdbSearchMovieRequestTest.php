<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Tests\Request;

use Scraper\ScraperTmdb\Model\MovieSearch;
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
        $this->assertInstanceOf(MovieSearch::class, $result->results[0]);
    }
}
