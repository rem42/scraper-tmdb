<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model;

class TvSeason
{
    public int $id;
    public ?string $name;
    public ?int $episodeCount = 0;
    public ?int $seasonNumber = 0;
    public ?string $posterPath;
    public ?\DateTimeInterface $airDate;
    public ?string $overview;
    /** @var array<int, TvEpisode> */
    public array $episodes = [];

    public function setAirDate(string $airDate): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $airDate)) {
            $this->airDate = $dateTime;
        }
        return $this;
    }

    public function addEpisode(TvEpisode $episode): self
    {
        $this->episodes[] = $episode;
        return $this;
    }
}
