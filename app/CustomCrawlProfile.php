<?php

namespace App;

use Spatie\Crawler\CrawlProfile;
use Psr\Http\Message\UriInterface;



class CustomCrawlProfile extends CrawlProfile
{
    public function shouldCrawl(UriInterface $url): bool
    {
        if ($url->getHost() !== 'localhost') {
            return false;
        }

        return $url->path() === '/';
    }
}
