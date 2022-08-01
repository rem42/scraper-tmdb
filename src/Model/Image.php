<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model;

class Image
{
    public float $aspectRatio;
    public string $filePath;
    public int $height;
    public ?string $iso639_1;
    public float $voteAverage;
    public int $voteCount;
    public int $width;
}
