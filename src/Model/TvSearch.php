<?php

namespace Scraper\ScraperTmdb\Model;

class TvSearch
{
    public int $id;
    public bool $adult;
    public ?string $backdropPath;
    public ?string $posterPath;
    /** @var array<int, int> */
    public array $genreIds;
    /** @var array<int, string> */
    public array $originCountry;
    public string $originalLanguage;
    public string $name;
    public string $originalName;
    public string $overview;
    public float $popularity;
    public \DateTime $firstAirDate;
    public bool $video;
    public float $voteAverage;
    public int $voteCount;

    public function setFirstAirDate(string $firstAirDate): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $firstAirDate)) {
            $this->firstAirDate = $dateTime;
        }
        return $this;
    }
}
