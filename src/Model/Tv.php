<?php

namespace Scraper\ScraperTmdb\Model;

class Tv extends TvSearch
{
    /** @var array<int, Crew> */
    public array $createdBy = [];
    /** @var array<int, int> */
    public array $episodeRunTime = [];
    /** @var array<int, Genre> */
    public array $genres;
    public ?string $homepage   = null;
    public ?bool $inProduction = null;
    /** @var array<int, string> */
    public array $languages = [];
    public \DateTime $lastAirDate;
    public ?Episode $lastEpisodeToAir = null;
    public ?Episode $nextEpisodeToAir = null;
    /** @var array<int, Company> */
    public array $networks        = [];
    public ?int $numberOfEpisodes = null;
    public ?int $numberOfSeasons  = null;
    /** @var array<int, Company> */
    public array $productionCompanies;
    /** @var array<int, Country> */
    public array $productionCountries;
    /** @var array<int, Season> */
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
}
