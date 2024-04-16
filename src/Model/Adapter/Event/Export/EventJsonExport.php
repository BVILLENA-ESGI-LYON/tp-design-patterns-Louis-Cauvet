<?php

namespace App\Adapter\Event\Export;

use App\Entity\Event;

class EventJsonExport {
    public function __construct(
        private readonly Event $event
    ) {
    }

    public function convert(): string
    {
        $json = [
            'event' => [
                'identifier' => $this->event->getId(),
                'name' => $this->event->getName(),
                'description' => $this->event->getDescription(),
                'dates' => [
                    'start' => $this->event->getStartDate(),
                    'end' => $this->event->getEndDate()
                ]
            ]
        ];

        return json_encode(
            value: $json,
            flags: JSON_THROW_ON_ERROR
        );
    }
}