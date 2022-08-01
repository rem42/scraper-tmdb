<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Tests\Request;

use Scraper\ScraperTmdb\Model\BelongsToCollection;
use Scraper\ScraperTmdb\Model\Images;
use Scraper\ScraperTmdb\Model\Movie;
use Scraper\ScraperTmdb\Model\Videos;
use Scraper\ScraperTmdb\Request\TmdbMovieRequest;

/**
 * @internal
 */
class TmdbMovieRequestTest extends AbtractRequestTest
{
    public function testTmdbMovieRequest(): void
    {
        $client = $this->getClient('movie.json');

        $request = new TmdbMovieRequest('apiKey');
        $request
            ->setId(299537)
        ;

        $result = $client->send($request);

        $this->assertInstanceOf(Movie::class, $result);
        $this->assertInstanceOf(BelongsToCollection::class, $result->belongsToCollection);
        $this->assertInstanceOf(Images::class, $result->images);
        $this->assertInstanceOf(Videos::class, $result->videos);
    }
}
