<?php

namespace Scraper\ScraperTmdb\Request;

use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\RequestQuery;
use Scraper\Scraper\Request\ScraperRequest;

/**
 * @Scraper(path="search/movie")
 */
class TmdbSearchMovieRequest extends TmdbRequest
{
    public function setlanguage(string $language): self
    {
        $this->parameters['language'] = $language;

        return $this;
    }

    public function setPage(int $page): self
    {
        $this->parameters['page'] = $page;

        return $this;
    }

    public function setIncludeAdult(bool $includeAdult): self
    {
        $this->parameters['include_adult'] = $includeAdult;

        return $this;
    }

    public function setRegion(string $region): self
    {
        $this->parameters['region'] = $region;

        return $this;
    }

    public function setYear(int $year): self
    {
        $this->parameters['year'] = $year;

        return $this;
    }

    public function setQuery(string $query): self
    {
        $this->parameters['query'] = $query;

        return $this;
    }

    public function setPrimaryReleaseYear(int $primaryReleaseYear): self
    {
        $this->parameters['primary_release_year'] = $primaryReleaseYear;

        return $this;
    }
}
