<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model\Miscellaneous;

class Trailer
{
    /* @phpstan-ignore-next-line */
    public array $quicktime = [];
    /** @var array<int, Youtube> */
    public array $youtube = [];

    /* @phpstan-ignore-next-line */
    public function addQuicktime($quicktime): self
    {
        $this->quicktime[] = $quicktime;
        return $this;
    }

    public function addYoutube(Youtube $youtube): self
    {
        $this->youtube[] = $youtube;
        return $this;
    }
}
