<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model;

class TvSearch
{
    public ?string $backdropPath = null;
    public ?\DateTimeInterface $firstAirDate = null;
    /** @var array<int, int> */
    public array $genreIds = [];
    public ?int $id = null;
    public ?string $name = null;
    /** @var array<int, string> */
    public array $originCountry = [];
    public ?string $originalLanguage = null;
    public ?string $originalName = null;
    public ?string $overview = null;
    public ?float $popularity = null;
    public ?string $posterPath = null;
    public float|int|null $voteAverage = null;
    public ?int $voteCount = null;

    public function setFirstAirDate(string $firstAirDate): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $firstAirDate)) {
            $this->firstAirDate = $dateTime;
        }
        return $this;
    }

    public function addGenreId(int $genreId): self
    {
        $this->genreIds[] = $genreId;
        return $this;
    }

    public function addOriginCountry(string $originCountry): self
    {
        $this->originCountry[] = $originCountry;
        return $this;
    }
}
