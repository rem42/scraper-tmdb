<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model;

class Movie extends MovieSearch
{
    public ?BelongsToCollection $belongsToCollection;
    public ?int $budget;
    /** @var array<int, Genre> */
    public array $genres;
    public ?string $homepage;
    public ?string $imdbId;
    /** @var array<int, Company> */
    public array $productionCompanies;
    /** @var array<int, Country> */
    public array $productionCountries;
    public ?int $revenue;
    public ?int $runtime;
    /** @var array<int, Language> */
    public array $spokenLanguages;
    public ?string $status;
    public ?string $tagline;
    public ?Images $images;
    public ?Videos $videos;

    public function addGenre(Genre $genre): self
    {
        $this->genres[] = $genre;
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

    public function addSpokenLanguage(Language $language): self
    {
        $this->spokenLanguages[] = $language;
        return $this;
    }
}
