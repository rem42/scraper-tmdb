<?php

namespace Scraper\ScraperTmdb\Model;

class Crew
{
    public int $id;
    public ?string $name        = null;
    public ?string $job         = null;
    public ?string $department  = null;
    public ?string $profilePath = null;
    public ?string $creditId    = null;
    public ?int $gender         = null;
}
