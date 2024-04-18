<?php

namespace EsgiIw\TpDesignPattern\Model\Entity\Participation;

use App\Attribute\AsEntity;
use App\Repository\EventRepository;
use App\Service\DB\Entity;
use EsgiIw\TpDesignPattern\Model\Entity\Event\EventInterface;
use EsgiIw\TpDesignPattern\Model\Entity\User\User;

class Participation
{
    private EventInterface $event;
    private User $user;


    public function __construct(EventInterface $event, User $user) {
        $this->event = $event;
        $this->user = $user;
    }

    public function getEvent(): EventInterface
    {
        return $this->event;
    }

    public function getUser(): User
    {
        return $this->user;
    }
}
