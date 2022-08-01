<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model;

class TvEpisode
{
    public int $id;
    public ?string $name;
    /** @var array<int, Crew> */
    public array $crew = [];
    /** @var array<int, Crew> */
    public array $guestStars   = [];
    public ?int $episodeNumber = 0;
    public ?int $seasonNumber  = 0;
    public ?\DateTimeInterface $airDate;
    public ?string $overview;
    public ?float $voteAverage;
    public ?int $voteCount;
    public ?string $stillPath;
    public ?string $productionCode;
    public ?int $runtime = null;

    public function setAirDate(string $lastAirDate): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $lastAirDate)) {
            $this->airDate = $dateTime;
        }
        return $this;
    }

    public function addCrew(Crew $crew): self
    {
        $this->crew[] = $crew;
        return $this;
    }

    public function addGuestStar(Crew $crew): self
    {
        $this->guestStars[] = $crew;
        return $this;
    }
}
