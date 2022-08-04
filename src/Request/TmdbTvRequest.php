<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Request;

use Scraper\Scraper\Attribute\Scraper;

#[Scraper(path: 'tv/{id}')]
class TmdbTvRequest extends TmdbRequest
{
    private int $id;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
}
