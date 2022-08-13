<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model\Miscellaneous;

class Image
{
    public ?float $aspectRatio = null;
    public ?int $height = null;
    public ?string $iso_639_1 = null;
    public ?string $filePath = null;
    public float|int|null $voteAverage = null;
    public ?int $voteCount = null;
    public ?int $width = null;
}
