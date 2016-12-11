<?php

namespace App\GoogleApi;

use Google_Service_Calendar;
use Google_Service_Calendar_Event;

class GoogleCalendarApi extends GoogleApi
{
    /** @var Google_Service_Calendar */
    private $service;

    /**
     * GoogleCalendarApi constructor.
     * @param string $credential
     * @param array $scopes
     */
    public function __construct(string $credential, array $scopes)
    {
        parent::__construct($credential, $scopes);
        $this->service = new Google_Service_Calendar($this->client());
    }

    /**
     * 指定したカレンダーに登録されている予定を削除する
     * @param string $calendarId
     */
    public function clear(string $calendarId)
    {
        $events = $this->service->events->listEvents($calendarId);
        while (true) {
            foreach ($events->getItems() as $event) {
                $this->service->events->delete($calendarId, $event->id);
            }

            $pageToken = $events->getNextPageToken();
            if ($pageToken) {
                $optParams = ['pageToken' => $pageToken];
                $events = $this->service->events->listEvents($calendarId, $optParams);
            } else {
                break;
            }
        }
    }

    /**
     * @param string $calendarId
     * @param Google_Service_Calendar_Event $event
     * @return Google_Service_Calendar_Event
     */
    public function insert(string $calendarId, Google_Service_Calendar_Event $event): Google_Service_Calendar_Event
    {
        return $this->service->events->insert($calendarId, $event);
    }
}