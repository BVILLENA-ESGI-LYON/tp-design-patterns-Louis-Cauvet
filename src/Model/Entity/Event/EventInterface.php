<?php

namespace EsgiIw\TpDesignPattern\Model\Entity\Event;

use DateTime;

interface EventInterface
{
    public function getId(): int;

    public function setId(int $id): static;

    public function getName(): string;

    public function setName(string $name): static;

    public function getDescription(): string;

    public function setDescription(string $description): static;

    public function getStartDate(): DateTime;

    public function setStartDate(DateTime $startDate): static;

    public function getEndDate(): DateTime;

    public function setEndDate(DateTime $endDate): static;
}