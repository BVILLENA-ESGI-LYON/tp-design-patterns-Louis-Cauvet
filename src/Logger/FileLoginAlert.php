<?php

namespace EsgiIw\TpDesignPattern\Logger;

use App\Attribute\AsEntity;
use App\Repository\UserRepository;
use App\Service\DB\Entity;

class FileLoginAlert implements LoginAlertInterface {
    public function __construct(){
    }

    public function log(string $type, string $message): void
    {
        // On écrit le message de log dans le fichier
        echo "On ajoute cette erreur dans le fichier de log : {$message}";
    }
}