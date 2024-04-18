<?php

namespace EsgiIw\TpDesignPattern\Observer;

use App\Attribute\AsEntity;
use App\Repository\UserRepository;
use App\Service\DB\Entity;

class Observer {
    private string $messageEcho;

    public function __construct(string $message){
        $this->messageEcho = $message;
    }

    public function echoResult()
    {
        echo $this->messageEcho;
    }
}