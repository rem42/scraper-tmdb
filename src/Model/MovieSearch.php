<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model;

class MovieSearch
{
    public ?bool $adult = null;
    public ?string $backdropPath = null;
    /** @var array<int, int> */
    public array $genreIds = [];
    public ?int $id = null;
    public ?string $originalLanguage = null;
    public ?string $originalTitle = null;
    public ?string $overview = null;
    public ?float $popularity = null;
    public ?string $posterPath = null;
    public ?\DateTime $releaseDate = null;
    public ?string $title = null;
    public ?bool $video = null;
    public float|int|null $voteAverage = null;
    public ?int $voteCount = null;

    public function setReleaseDate(string $releaseDate): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $releaseDate)) {
            $this->releaseDate = $dateTime;
        }
        return $this;
    }
}
