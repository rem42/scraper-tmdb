<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model\Miscellaneous;

class BelongsToCollection
{
    public int $id;
    public string $name;
    public ?string $backdropPath;
    public ?string $posterPath;
}
