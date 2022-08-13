<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model;

use Scraper\ScraperTmdb\Model\Miscellaneous\Crew;

class TvEpisode
{
    public ?int $id = null;
    public ?int $showId = null;
    public ?string $name = null;
    /** @var array<int, Crew> */
    public array $crew = [];
    /** @var array<int, Crew> */
    public array $guestStars = [];
    public ?int $episodeNumber = 0;
    public ?int $seasonNumber = 0;
    public ?\DateTimeInterface $airDate = null;
    public ?string $overview = null;
    public ?float $voteAverage = null;
    public ?int $voteCount = null;
    public ?string $stillPath = null;
    public ?string $productionCode = null;
    public ?int $runtime = null;

    public function setAirDate(string $airDate): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $airDate)) {
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
