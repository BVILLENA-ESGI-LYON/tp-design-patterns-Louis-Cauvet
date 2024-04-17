<?php

namespace EsgiIw\TpDesignPattern\Repository;

use App\Attribute\AsEntity;
use App\Repository\UserRepository;
use App\Service\DB\Entity;
use EsgiIw\TpDesignPattern\Model\Controller\UserController;
use EsgiIw\TpDesignPattern\Model\Entity\Event\Event;
use EsgiIw\TpDesignPattern\Model\Controller\EventController;
use EsgiIw\TpDesignPattern\Model\Entity\User\User;

class Repository{
    private EventController $eventController;
    private UserController $userController;


    public function __construct(EventController $eventController, UserController $userController)
    {
        $this->eventController = $eventController;
        $this->userController = $userController;
    }

    public function getEventDetail(int $idEvent) : Event
    {
        return $this->eventController->getEvent($idEvent);
    }

    public function getUserDetail(int $idUser) : User
    {
        return $this->userController->getUser($idUser);
    }

    public function deleteEvent(int $idEvent){
        $this->eventController->deleteEvent($idEvent);
    }

    public function deleteUser(int $idUser){
        $this->userController->deleteUser($idUser);
    }
}