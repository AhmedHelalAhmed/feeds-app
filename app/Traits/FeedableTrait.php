<?php


namespace App\Traits;

trait FeedableTrait
{
    private $feeds;

    private function resetFeeds()
    {
        $this->feeds = collect();
    }

    /**
     * @return bool
     */
    private function isReachLimit(): bool
    {
        return $this->feeds->count() === $this->limit;
    }
}
