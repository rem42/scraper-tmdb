<?php

namespace Scraper\ScraperTmdb\Model;

class MovieSearch
{
    public int $id;
    public bool $adult;
    public ?string $backdropPath;
    public ?string $posterPath;
    /** @var array<int, int> */
    public array $genreIds;
    public string $originalLanguage;
    public string $title;
    public string $originalTitle;
    public string $overview;
    public float $popularity;
    public \DateTime $releaseDate;
    public bool $video;
    public float $voteAverage;
    public int $voteCount;

    public function setReleaseDate(string $releaseDate): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $releaseDate)) {
            $this->releaseDate = $dateTime;
        }
        return $this;
    }
}