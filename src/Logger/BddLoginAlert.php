<?php

namespace EsgiIw\TpDesignPattern\Logger;

use App\Attribute\AsEntity;
use App\Repository\UserRepository;
use App\Service\DB\Entity;

class BddLoginAlert implements LoginAlertInterface {
    public function __construct(){
    }

    public function log(string $type, string $message): void
    {
        // On insère le message dans la base de données
        echo "On ajoute cette erreur de log dans la base de données : {$message}";
    }
}