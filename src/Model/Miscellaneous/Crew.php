<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model\Miscellaneous;

class Crew
{
    public int $id;
    public ?string $name = null;
    public ?string $job = null;
    public ?string $department = null;
    public ?string $profilePath = null;
    public ?string $creditId = null;
    public ?int $gender = null;
    public ?bool $adult = false;
    public ?string $knownForDepartment = null;
    public ?string $originalName = null;
    public ?float $popularity = null;
    public ?int $order = null;
}
