<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model\Miscellaneous;

class Casts
{
    /** @var array<int, Crew> */
    public array $cast = [];
    /** @var array<int, Crew> */
    public array $crew = [];

    public function addCast(Crew $cast): self
    {
        $this->cast[] = $cast;
        return $this;
    }

    public function addCrew(Crew $crew): self
    {
        $this->crew[] = $crew;
        return $this;
    }
}
