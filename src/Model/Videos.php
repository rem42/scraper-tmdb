<?php

namespace Scraper\ScraperTmdb\Model;

class Videos
{
    public ?int $id;
    /** @var array<int, Video> */
    public array $results;

    public function addResult(Video $video): self
    {
        $this->results[] = $video;
        return $this;
    }
}
