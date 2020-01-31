<?php

namespace TikTokAPI\Response;

use TikTokAPI\Response;

/**
 * CanStartLiveStreamResponse.
 *
 * @method Model\LiveStream getRoom()
 * @method $this setRoom(Model\LiveStream $value)
 * @method $this unsetRoom()
 */
class CanStartLiveStreamResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'room'    => 'Model\LiveStreamRoom',
    ];
}
