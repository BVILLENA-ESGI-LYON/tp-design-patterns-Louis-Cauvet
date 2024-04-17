<?php

namespace EsgiIw\TpDesignPattern\Model\Controller;

use App\Attribute\AsEntity;
use App\Repository\EventRepository;
use App\Service\DB\Entity;
use EsgiIw\TpDesignPattern\Model\Entity\Event\Event;

class EventController
{
    private array $tabEvents;

    public function __construct($tabEvents) {
        $this->tabEvents = $tabEvents;
    }

    public function getTabEvents() : array
    {
        return $this->tabEvents;
    }


    public function getEvent(int $idEvent) : Event
    {
        $result = null;
        foreach ($this->tabEvents as $event){
            if($event->getId() === $idEvent) {
                $result = $event;
            }
        }
        return $result;
    }

    public function deleteEvent(int $idEvent)
    {
        foreach ($this->tabEvents as $event){
            if($event->getId() === $idEvent) {
                $indexEvent = array_search($event, $this->tabEvents);
                unset($this->tabEvents[$indexEvent]);
            }
        }
    }

}