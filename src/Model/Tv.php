<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model;

class Tv extends TvSearch
{
    /** @var array<int, Crew> */
    public array $createdBy = [];
    /** @var array<int, int> */
    public array $episodeRunTime = [];
    /** @var array<int, Genre> */
    public array $genres;
    public ?string $homepage = null;
    public ?bool $inProduction = null;
    /** @var array<int, string> */
    public array $languages = [];
    public \DateTime $lastAirDate;
    public ?TvEpisode $lastEpisodeToAir = null;
    public ?TvEpisode $nextEpisodeToAir = null;
    /** @var array<int, Company> */
    public array $networks = [];
    public ?int $numberOfEpisodes = null;
    public ?int $numberOfSeasons = null;
    /** @var array<int, Company> */
    public array $productionCompanies = [];
    /** @var array<int, Country> */
    public array $productionCountries = [];
    /** @var array<int, TvSeason> */
    public array $seasons = [];
    /** @var array<int, Language> */
    public array $spokenLanguages;
    public ?string $status;
    public ?string $tagline;
    public ?string $type = null;
    public ?Images $images;
    public ?Videos $videos;

    public function setLastAirDate(string $lastAirDate): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $lastAirDate)) {
            $this->firstAirDate = $dateTime;
        }
        return $this;
    }

    public function addCreatedBy(Crew $crew): self
    {
        $this->createdBy[] = $crew;
        return $this;
    }

    public function addGenre(Genre $genre): self
    {
        $this->genres[] = $genre;
        return $this;
    }

    public function addLanguage(string $language): self
    {
        $this->languages[] = $language;
        return $this;
    }

    public function addNetwork(Company $company): self
    {
        $this->networks[] = $company;
        return $this;
    }

    public function addProductionCompany(Company $company): self
    {
        $this->productionCompanies[] = $company;
        return $this;
    }

    public function addProductionCountry(Country $country): self
    {
        $this->productionCountries[] = $country;
        return $this;
    }

    public function addSeason(TvSeason $season): self
    {
        $this->seasons[] = $season;
        return $this;
    }

    public function addSpokenLanguage(Language $language): self
    {
        $this->spokenLanguages[] = $language;
        return $this;
    }
}
