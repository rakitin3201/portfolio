<?php

namespace App\Spiders;

use Generator;
use RoachPHP\Downloader\Middleware\RequestDeduplicationMiddleware;
use RoachPHP\Extensions\LoggerExtension;
use RoachPHP\Extensions\StatsCollectorExtension;
use RoachPHP\Http\Response;
use RoachPHP\Spider\BasicSpider;
use RoachPHP\Spider\ParseResult;

class GitHubSpider extends BasicSpider
{
    public array $startUrls = [
        'https://github.com/rakitin3201'
    ];


    public array $downloaderMiddleware = [
        RequestDeduplicationMiddleware::class,
    ];

    public array $spiderMiddleware = [
        //
    ];

    public array $itemProcessors = [
        //
    ];

    public array $extensions = [
        LoggerExtension::class,
        StatsCollectorExtension::class,
    ];

    public int $concurrency = 2;

    public int $requestDelay = 1;

    public function parseOverview(Response $response): \Generator
    {
        // We’re only interested in the overview page 
        // because we can extract the links we’re 
        // actually interested in from it.
        $pages = $response
            ->filter('main > div:first-child a')
            ->links();
        
        foreach ($pages as $page) {
            // Since we’re not specifying the second parameter, 
            // all article pages will get handled by the 
            // spider’s `parse` method.
            yield $this->request('GET', $page->getUri());
        }
    }

    /**
     * @return Generator<ParseResult>
     */
    public function parse(Response $response): \Generator
    {
        $title = $response->filter('h1')->text();

        $subtitle = $response
            ->filter('main > div:nth-child(2) p:first-of-type')
            ->text();

        yield $this->item([
            'title' => $title,
            'subtitle' => $subtitle,
        ]);
    }

    /** @return Request[] */
    protected function initialRequests(): array
    {
        return [
            new Request(
                'GET',
                'https://github.com/rakitin3201',
                // Specify a different parse method for 
                // the intial request.
                [$this, 'parseOverview']
            ),
        ];
    }
}
