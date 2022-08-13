<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model;

use Scraper\ScraperTmdb\Model\Miscellaneous\BelongsToCollection;
use Scraper\ScraperTmdb\Model\Miscellaneous\Genre;
use Scraper\ScraperTmdb\Model\Miscellaneous\Images;
use Scraper\ScraperTmdb\Model\Miscellaneous\ProductionCompany;
use Scraper\ScraperTmdb\Model\Miscellaneous\ProductionCountry;
use Scraper\ScraperTmdb\Model\Miscellaneous\SpokenLanguage;

class Movie extends MovieSearch
{
    public ?BelongsToCollection $belongsToCollection = null;
    public ?int $budget = null;
    /** @var array<int, Genre> */
    public array $genres = [];
    public ?string $homepage = null;
    public ?string $imdbId = null;
    /** @var array<int, ProductionCompany> */
    public array $productionCompanies = [];
    /** @var array<int, ProductionCountry> */
    public array $productionCountries = [];
    public ?int $revenue = null;
    public ?int $runtime = null;
    /** @var array<int, SpokenLanguage> */
    public array $spokenLanguages = [];
    public ?string $status = null;
    public ?string $tagline = null;
    public ?Images $images = null;
    public ?Videos $videos = null;

    public function addGenre(Genre $genre): self
    {
        $this->genres[] = $genre;
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

    public function addSpokenLanguage(SpokenLanguage $spokenLanguage): self
    {
        $this->spokenLanguages[] = $spokenLanguage;
        return $this;
    }
}
