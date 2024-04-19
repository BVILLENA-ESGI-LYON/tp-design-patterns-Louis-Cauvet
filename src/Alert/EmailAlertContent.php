<?php

namespace EsgiIw\TpDesignPattern\Alert;

use App\Attribute\AsEntity;
use App\Repository\UserRepository;
use App\Service\DB\Entity;

class EmailAlertContent
{
    public function informAdminUserCreate(){
        echo "J'informe par mail un admin de la validation d'un compte-utilisateur";
    }

    public function confirmEventInscription(){
        echo "Je confirme par mail l'inscription à un évènement d'un participant";
    }

    public function sendEventReminder(){
        echo "J'envoie par mail un rappel 1 jour avant l'évènement";
    }
}