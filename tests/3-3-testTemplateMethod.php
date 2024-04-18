<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Model\Entity\Event\Event;
use EsgiIw\TpDesignPattern\Model\Entity\Participation\Participation;
use EsgiIw\TpDesignPattern\Model\Entity\Participation\ValidationParticipationOutsideEvents;
use EsgiIw\TpDesignPattern\Model\Entity\Participation\ValidationParticipationSportsEvent;
use EsgiIw\TpDesignPattern\Model\Entity\User\User;

require_once 'vendor/autoload.php';


// Test des Template Method
echo "Test Template Method pour la validation de l'inscription propre à chaque type d'évènement :";
echo "\n";

$user = (new User())
    ->setId(1)
    ->setFirstname("Louis")
    ->setLastname("Cauvet")
    ->setEmail('louiscauvet8@gmail.com');

$event = (new Event())
    ->setId(1)
    ->setName("Sortie piscine")
    ->setDescription('Une journée rafraichissante !')
    ->setStartDate(new \DateTime('2024-08-07 09:30'))
    ->setEndDate(new \DateTime('2024-08-07 17:30'));

$participation = new Participation($event,$user);

$validSportsEvent = new ValidationParticipationSportsEvent();
$validSportsEvent->startValidation($participation);

echo "\n\n";

$validOutsideEvent = new ValidationParticipationOutsideEvents();
$validOutsideEvent->startValidation($participation);