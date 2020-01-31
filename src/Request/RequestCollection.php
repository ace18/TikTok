<?php

namespace TikTokAPI\Request;

use TikTokAPI\TikTok;

class RequestCollection
{
    /** @var TikTok */
    public $tt;

    public function __construct(TikTok $parent)
    {
        $this->tt = $parent;
    }
}
