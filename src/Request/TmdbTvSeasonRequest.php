<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Request;

use Scraper\Scraper\Annotation\Scraper;

/**
 * @Scraper(path="tv/{id}/season/{seasonNumber}")
 */
class TmdbTvSeasonRequest extends TmdbRequest
{
    private int $id;
    private int $seasonNumber;

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
}
