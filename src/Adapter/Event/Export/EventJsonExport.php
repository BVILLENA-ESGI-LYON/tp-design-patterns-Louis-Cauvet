<?php

declare(strict_types=1);

namespace EsgiIw\TpDesignPattern\Adapter\Event\Export;

use App\Entity\Event;

class EventJsonExport {
    public function __construct(
        private array $events,
    ) {
    }

    public function convert(): string
    {
        $jsonStructure = [
            'events' => [],
        ];
        foreach ($this->events as $event) {
            $jsonStructure['events'][] = [
                'id' => $event->getId(),
                'name' => $event->getName(),
                'description' => $event->getDescription(),
                'startDate' => [
                    'date' => $event->getStartDate()->format('d/m/Y'),
                    'time' => $event->getStartDate()->format('H:i'),
                ],
                'endDate' => [
                    'date' => $event->getEndDate()->format('d/m/Y'),
                    'time' => $event->getEndDate()->format('H:i'),
                ]
            ];
        }

        return json_encode(
            value: $jsonStructure,
            flags: JSON_THROW_ON_ERROR
        );
    }
}