<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Model\Miscellaneous;

class Images
{
    /** @var array<int, Image> */
    public array $backdrops = [];
    /** @var array<int, Image> */
    public array $logos = [];
    /** @var array<int, Image> */
    public array $posters = [];

    public function addBackdrop(Image $backdrop): self
    {
        $this->backdrops[] = $backdrop;
        return $this;
    }

    public function addLogo(Image $logo): self
    {
        $this->logos[] = $logo;
        return $this;
    }

    public function addPoster(Image $poster): self
    {
        $this->posters[] = $poster;
        return $this;
    }
}
