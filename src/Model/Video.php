<?php

namespace Scraper\ScraperTmdb\Model;

class Video
{
    public string $id;
    public string $iso6391;
    public string $iso31661;
    public string $key;
    public string $name;
    public string $site;
    public int $size;
    public string $type;
    public bool $official;
    public \DateTimeInterface $publishedAt;
}
