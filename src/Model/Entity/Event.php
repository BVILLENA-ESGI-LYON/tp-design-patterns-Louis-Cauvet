<?php

namespace App\Entity;

use App\Attribute\AsEntity;
use App\Repository\EventRepository;
use App\Service\DB\Entity;
use DateTime;

class Event
{
    private int $id;
    private string $name;
    private string $description;
    private string $startDate;
    private string $endDate;


    public function __construct(int $id, string $name, string $description, string $startDate, string $endDate) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;

    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;

    }

    public function getStartDate(): string
    {
        return $this->startDate;
    }

    public function setStartDate(string $startDate): static
    {
        $this->startDate = $startDate;
        return $this;

    }

    public function getEndDate(): string
    {
        return $this->endDate;
    }

    public function setEndDate(string $endDate): static
    {
        $this->endDate = $endDate;
        return $this;

    }

//    public function toArray(): array
//    {
//        return [
//            'id' => $this->getId(),
//            'name' => $this->getName(),
//            'description' => $this->getDescription(),
//            'startDate' => $this->getStartDate()->format('Y-m-d H:i:s'),
//            'endDate' => $this->getEndDate()->format('Y-m-d H:i:s'),
//            'tag' => $this->getTag(),
//            'capacity' => $this->getCapacity(),
//            'owner_id' => $this->getOwnerId(),
//            'fileName' => $this->getFileName(),
//            'fileSize' => $this->getFileSize()
//        ];
//    }
}
