<?php

namespace EsgiIw\TpDesignPattern\Alert;

use App\Attribute\AsEntity;
use App\Repository\UserRepository;
use App\Service\DB\Entity;

class SmsAlertContent
{
    public function informAdminUserCreate(){
        echo "On informe par message un admin de la validation d'un compte-utilisateur";
    }

    public function confirmEventInscription(){
        echo "On confirme par message l'inscription à un évènement d'un participant";
    }

    public function sendEventReminder(){
        echo "On envoie par message un rappel 1 jour avant l'évènement";
    }
}