<?php

namespace TikTokAPI\Request;

use TikTokAPI\Response;

class Live extends RequestCollection
{

    private const STATUS = [
        'created' => 1,
        'started' => 2,
        'ended' => 4
    ];

    private const REASON = [
        'initiatedByApp' => 0,
        'initiatedByUser' => 1
    ];

    function canStartLiveStream()
    {
        $response = $this->tt->request('aweme/v1/live/podcast/')->getResponse();

        return new Response\CanStartLiveStreamResponse($response);
    }

    function startLiveStream(string $title, $contactsAuthorized = 0)
    {
        $room = $this->createLiveStreamRoom($title, $contactsAuthorized);
        $this->updateLiveStreamStatus(
            $room->room_id,
            $room->stream_id,
            self::STATUS['started'],
            self::REASON['initiatedByUser']
        );
    }

    function endLiveStream()
    {
    }

    function createLiveStreamRoom(string $title, $contactsAuthorized)
    {
        $response = $this->tt->request('aweme/v1/room/create/')
            ->addPost('title', $title)
            ->addPost('contacts_authorized', $contactsAuthorized)
            ->getResponse();

        return new Response\CreateLiveStreamRoomResponse($response);
    }

    function updateLiveStreamStatus($room_id, $stream_id, $status, $reason)
    {
        $response = $this->tt->request('aweme/v1/room/create/')
            ->addParam('room_id', $room_id)
            ->addParam('stream_id', $stream_id)
            ->addParam('status', $status)
            ->addParam('reason_no', $reason)
            ->getResponse();

        return new Response\UpdateLiveStreamResponse($response);
    }
}
