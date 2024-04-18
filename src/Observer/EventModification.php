<?php

namespace EsgiIw\TpDesignPattern\Observer;

use App\Attribute\AsEntity;
use App\Repository\UserRepository;
use App\Service\DB\Entity;
use EsgiIw\TpDesignPattern\Model\Entity\Event\Event;
use EsgiIw\TpDesignPattern\Publisher\Publisher;

class EventModification
{
    public function __construct(
        private Publisher $publisher,
    )
    {
    }

    public function modifyEvent(Event $event): void
    {
        // Modification fictive de l'évènement

        $this->publisher->notify(
            eventName: 'event:modified',
            data: $event,
        );
    }
}