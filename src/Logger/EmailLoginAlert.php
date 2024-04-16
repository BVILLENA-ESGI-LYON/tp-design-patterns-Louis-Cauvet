<?php

namespace EsgiIw\TpDesignPattern\Logger;

use App\Attribute\AsEntity;
use App\Repository\UserRepository;
use App\Service\DB\Entity;

class EmailLoginAlert implements LoginAlertInterface {
    public function __construct(){
    }

    public function log(string $type, string $message): void
    {
        // On prépare le mail contenant le message de log
        echo "On envoie le mail contenant ce message d'erreur de log aux admins : {$message}";
    }
}