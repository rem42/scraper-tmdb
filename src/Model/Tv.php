<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model;

use Scraper\ScraperTmdb\Model\Miscellaneous\Crew;
use Scraper\ScraperTmdb\Model\Miscellaneous\Genre;
use Scraper\ScraperTmdb\Model\Miscellaneous\Images;
use Scraper\ScraperTmdb\Model\Miscellaneous\Network;
use Scraper\ScraperTmdb\Model\Miscellaneous\ProductionCompany;
use Scraper\ScraperTmdb\Model\Miscellaneous\ProductionCountry;
use Scraper\ScraperTmdb\Model\Miscellaneous\SpokenLanguage;

class Tv extends TvSearch
{
    public ?bool $adult = null;
    /** @var array<int, Crew> */
    public array $createdBy = [];
    /** @var array<int, int> */
    public array $episodeRunTime = [];
    /** @var array<int, Genre> */
    public array $genres = [];
    public ?string $homepage = null;
    public ?bool $inProduction = null;
    /** @var array<int, string> */
    public array $languages = [];
    public ?\DateTimeInterface $lastAirDate = null;
    public ?TvEpisode $lastEpisodeToAir = null;
    public ?TvEpisode $nextEpisodeToAir = null;
    /** @var array<int, Network> */
    public array $networks = [];
    public ?int $numberOfEpisodes = null;
    public ?int $numberOfSeasons = null;
    /** @var array<int, ProductionCompany> */
    public array $productionCompanies = [];
    /** @var array<int, ProductionCountry> */
    public array $productionCountries = [];
    /** @var array<int, Season> */
    public array $seasons = [];
    /** @var array<int, SpokenLanguage> */
    public array $spokenLanguages = [];
    public ?string $status = null;
    public ?string $tagline = null;
    public ?string $type = null;
    public ?Images $images = null;
    public ?Videos $videos = null;

    public function setLastAirDate(string $lastAirDate): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $lastAirDate)) {
            $this->lastAirDate = $dateTime;
        }
        return $this;
    }

    public function addCreatedBy(Crew $createdBy): self
    {
        $this->createdBy[] = $createdBy;
        return $this;
    }

    public function addEpisodeRunTime(int $episodeRunTime): self
    {
        $this->episodeRunTime[] = $episodeRunTime;
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

    public function addNetwork(Network $network): self
    {
        $this->networks[] = $network;
        return $this;
    }

    public function addProductionCompany(ProductionCompany $productionCompany): self
    {
        $this->productionCompanies[] = $productionCompany;
        return $this;
    }

    public function addProductionCountry(ProductionCountry $productionCountry): self
    {
        $this->productionCountries[] = $productionCountry;
        return $this;
    }

    public function addSeason(Season $season): self
    {
        $this->seasons[] = $season;
        return $this;
    }

    public function addSpokenLanguage(SpokenLanguage $spokenLanguage): self
    {
        $this->spokenLanguages[] = $spokenLanguage;
        return $this;
    }
}
