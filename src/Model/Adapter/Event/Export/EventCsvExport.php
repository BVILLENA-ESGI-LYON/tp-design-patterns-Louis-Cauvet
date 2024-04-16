<?php

namespace App\Adapter\Event\Export;

use App\Entity\Event;

class EventCsvExport {
    public function __construct(
        private readonly Event $event
    ) {
    }

    public function convert(): array
    {
        $csv = [
            [
                $this->event->getId(),
                $this->event->getName(),
                $this->event->getDescription(),
                $this->event->getStartDate(),
                $this->event->getEndDate(),
            ]
        ];

        return $csv;
    }
}