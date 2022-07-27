<?php

namespace Scraper\ScraperTmdb\Api;

use Scraper\Scraper\Api\AbstractApi;

abstract class AbstractTmdbApi extends AbstractApi
{
    public function execute(): object|array|bool|string
    {
        $content = $this->response->getContent();

        $content = json_decode($content, true, 512, \JSON_THROW_ON_ERROR);

        if (!\is_array($content)) {
            throw new \Exception('no result');
        }

        $jsonContent = json_encode($content, \JSON_THROW_ON_ERROR);

        /* @phpstan-ignore-next-line */
        return $this->serializer->deserialize($jsonContent, $this->getType(), 'json');
    }

    /**
     * @return class-string|string
     */
    abstract protected function getType(): string;
}
