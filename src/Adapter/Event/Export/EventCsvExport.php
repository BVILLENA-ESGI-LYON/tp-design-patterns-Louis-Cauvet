<?php

declare(strict_types=1);

namespace EsgiIw\TpDesignPattern\Adapter\Event\Export;

use App\Entity\Event;

final class EventCsvExport {
    public function __construct(
        private array $events,
    ) {
    }

    public function convert(): string
    {
        $fileContent = $this->getLine(
            'ID',
            'Nom',
            'Description',
            'DateDebut',
            'DateFin'
        );

        foreach ($this->events as $event) {
            $fileContent .= "\n" . $this->getLine(
                (string) $event->getId(),
                $event->getName(),
                $event->getDescription(),
                $event->getStartDate()->format('d/m/Y H:i'),
                $event->getEndDate()->format('d/m/Y H:i'),
            );
        }

        return $fileContent;
    }

    private function getLine(string ...$data): string
    {
        return implode(
            separator: ';',
            array: $data
        );
    }
}