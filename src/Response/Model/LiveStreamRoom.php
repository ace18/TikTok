<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * LiveStreamRoom.
 *
 * @method int getCreateTime()
 * @method int getFinishTime()
 * @method User getOwner()
 * @method string getRoomId()
 * @method int getStatus()
 * @method string getStreamId()
 * @method LiveStreamInfo getLiveStreamInfo()
 * @method string getTitle();
 * @method int getUserCount();
 */
class LiveStreamRoom extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        /** The timestamp in seconds when the stream was created */
        'create_time' => 'int',

        /** The timestamp in seconds when this request was processed */
        'finish_time' => 'int',

        /** Details about the user hosting the stream */
        'owner' => 'User',

        /** The ID of the stream */
        'room_id' => 'string',

        /** ??? */
        'status' => 'int',

        /** The ID used in the stream URL */
        'stream_id' => 'string',

        /** Contains a link to the stream */
        'stream_url' => 'LiveStreamInfo',

        /** The title of the stream */
        'title' => 'string',

        /** The number of users currently in the stream */
        'user_count' => 'int',
    ];
}
