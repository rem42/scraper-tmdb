<?php

namespace Scraper\ScraperTmdb\Request;

use Scraper\Scraper\Annotation\Scraper;

/**
 * @Scraper(path="tv/{id}/season/{seasonNumber}/episode/{episodeNumber}")
 */
class TmdbTvEpisodeRequest extends TmdbRequest
{
    private int $id;
    private int $seasonNumber;
    private int $episodeNumber;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getSeasonNumber(): int
    {
        return $this->seasonNumber;
    }

    public function setSeasonNumber(int $seasonNumber): self
    {
        $this->seasonNumber = $seasonNumber;
        return $this;
    }

    public function getEpisodeNumber(): int
    {
        return $this->episodeNumber;
    }

    public function setEpisodeNumber(int $episodeNumber): self
    {
        $this->episodeNumber = $episodeNumber;
        return $this;
    }
}
