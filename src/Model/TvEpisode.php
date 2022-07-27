<?php

namespace Scraper\ScraperTmdb\Model;

class TvEpisode
{
    public int $id;
    public ?string $name;
    public ?int $episodeNumber = 0;
    public ?int $seasonNumber  = 0;
    public ?\DateTimeInterface $airDate;
    public ?string $overview;
    public ?float $voteAverage;
    public ?int $voteCount;
    public ?string $stillPath;

    public function setAirDate(string $lastAirDate): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $lastAirDate)) {
            $this->airDate = $dateTime;
        }
        return $this;
    }
}
