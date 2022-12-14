<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Request;

use Scraper\Scraper\Attribute\Scraper;

#[Scraper(path: 'search/tv')]
class TmdbSearchTvRequest extends TmdbRequest
{
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

    public function setQuery(string $query): self
    {
        $this->parameters['query'] = $query;

        return $this;
    }

    public function setFirstAirDateYear(int $firstAirDateYear): self
    {
        $this->parameters['first_air_date_year'] = $firstAirDateYear;

        return $this;
    }
}
