<?php declare(strict_types=1);

namespace Scraper\ScraperTmdb\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scheme;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestQuery;
use Scraper\Scraper\Request\ScraperRequest;

#[Scraper(method: Method::GET, scheme: Scheme::HTTPS, host: 'api.themoviedb.org', path: '3/')]
abstract class TmdbRequest extends ScraperRequest implements RequestQuery
{
    /** @var array<string, int|string|bool> */
    protected array $parameters = [];

    public function __construct(
        protected string $apiKey
    ) {}

    /**
     * @return array<string, bool|int|string>
     */
    public function getQuery(): array
    {
        return array_merge(
            ['api_key' => $this->apiKey],
            $this->parameters
        );
    }

    public function setLanguage(string $language): self
    {
        $this->parameters['language'] = $language;

        return $this;
    }

    /**
     * @param array<int, string> $list
     */
    public function setAppendToResponse(array $list): self
    {
        $this->parameters['append_to_response'] = implode(',', $list);

        return $this;
    }
}
