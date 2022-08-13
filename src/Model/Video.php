<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model;

class Video
{
    public ?string $iso_639_1 = null;
    public ?string $iso_3166_1 = null;
    public ?string $name = null;
    public ?string $key = null;
    public ?string $site = null;
    public ?int $size = null;
    public ?string $type = null;
    public ?bool $official = null;
    public ?\DateTimeInterface $publishedAt = null;
    public ?string $id = null;

    public function setPublishedAt(string $publishedAt): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $publishedAt)) {
            $this->publishedAt = $dateTime;
        }
        return $this;
    }
}
