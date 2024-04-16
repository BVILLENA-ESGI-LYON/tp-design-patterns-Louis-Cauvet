<?php

namespace EsgiIw\TpDesignPattern\Model\Entity\Event;

use DateTime;

class SportsEvent implements EventInterface {

    private int $id;
    private string $name;
    private string $description;
    private DateTime $startDate;
    private DateTime $endDate;

    public function __construct (
        private Event $event,
        private bool $medicalCertificate,
    ) {
    }

    public function getId(): int
    {
        return $this->event->getId();
    }

    public function setId(int $id): static
    {
        $this->event->setId($id);
        return $this;
    }

    public function getName(): string
    {
        return $this->event->getName();
    }

    public function setName(string $name): static
    {
        $this->event->setName($name);
        return $this;
    }

    public function getDescription(): string
    {
        return $this->event->getDescription();
    }

    public function setDescription(string $description): static
    {
        $this->event->setDescription($description);
        return $this;
    }

    public function getStartDate(): DateTime
    {
        return $this->event->getStartDate();
    }

    public function setStartDate(DateTime $startDate): static
    {
        $this->event->setStartDate($startDate);
        return $this;
    }

    public function getEndDate(): DateTime
    {
        return $this->event->getEndDate();
    }

    public function setEndDate(DateTime $endDate): static
    {
        $this->event->setEndDate($endDate);
        return $this;
    }

    public function getMedicalCertificate(): bool
    {
        return $this->medicalCertificate;
    }

    public function setMedicalCertificate(bool $medicalCertificate): static
    {
        $this->medicalCertificate = $medicalCertificate;
        return $this;
    }
}