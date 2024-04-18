<?php

namespace EsgiIw\TpDesignPattern\Model\Entity\Participation;

use App\Attribute\AsEntity;
use App\Repository\EventRepository;
use App\Service\DB\Entity;

class ValidationParticipationSportsEvent extends AbstractValidationPartipation
{
    protected function checkPlacesNumber(Participation $participation) : void
    {
        // Processus de vérification du nombre de places restantes
        echo "Le nombre de places restantes pour l'évènement sportif à été vérifié !";
        echo "\n";
    }

    protected function checkMedicalCertificate(Participation $participation) : void
    {
        // Processus de vérification du certificat médical de l'utilisateur
        echo "Le certificat médical de l'utilisateur à été vérifié !";
        echo "\n";
    }

    protected function sendValidation(Participation $participation) : void
    {
        // Processus d'enregistrement, et de validation de la participation
        $participant = $participation->getUser();
        $identityParticipant = $participant->getFirstname()." ".$participant->getLastname();
        $event = $participation->getEvent()->getName();
        echo "Tout est en ordre, le participant {$identityParticipant} est inscrit à l'évènement sportif {$event} !";
        echo "\n";
    }
}