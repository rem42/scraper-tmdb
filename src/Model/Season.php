<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model;

class Season
{
    public ?\DateTimeInterface $airDate = null;
    public ?int $episodeCount = null;
    public ?int $id = null;
    public ?string $name = null;
    public ?string $overview = null;
    public ?string $posterPath = null;
    public ?int $seasonNumber = null;

    public function setAirDate(string $airDate): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $airDate)) {
            $this->airDate = $dateTime;
        }
        return $this;
    }
}
