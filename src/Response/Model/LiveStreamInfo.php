<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * LiveStreamInfo.
 *
 * @method string getRtmpPullUrl()
 * @method string getRtmpPushUrl()
 * @method string getSid()
 */
class LiveStreamInfo extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [

        /** A link to the stream source */
        'rtmp_pull_url' => 'string',

        /** A link used to publish to the stream (only present if you own the live stream) */
        'rtmp_push_url' => 'string',

        /** The ID used in the stream URL */
        'sid' => 'string',
    ];
}
