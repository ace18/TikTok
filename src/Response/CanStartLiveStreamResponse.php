<?php

namespace TikTokAPI\Response;

use TikTokAPI\Response;

/**
 * CanStartLiveStreamResponse.
 *
 * @method bool getCanBeLiveBroadcast()
 * @method Model\Extra getExtra()
 * @method $this setCanBeLiveBroadcast(bool $value)
 * @method $this setExtra(Model\Extra $value)
 * @method $this unsetCanBeLiveBroadcast()
 * @method $this unsetExtra()
 */
class CanStartLiveStreamResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'can_be_live_podcast'    => 'boolean',
        'extra'             => 'Model\Extra',
    ];
}
