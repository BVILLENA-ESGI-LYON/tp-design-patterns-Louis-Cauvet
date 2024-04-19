<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Model\Entity\Event\Event;
use EsgiIw\TpDesignPattern\Model\Entity\Participation\Participation;
use EsgiIw\TpDesignPattern\Model\Entity\Participation\ValidationParticipationOutsideEvents;
use EsgiIw\TpDesignPattern\Model\Entity\Participation\ValidationParticipationSportsEvent;
use EsgiIw\TpDesignPattern\Model\Entity\User\User;

require_once 'vendor/autoload.php';

echo "---------------------------- Tests Template Method ----------------------------";
echo "\n\n";

echo "<<<<<<<<<<< Test de la validation de l'inscription propre à chaque type d'évènement >>>>>>>>>>>";
echo "\n";

echo "On crée une instance de 'User', et une autre de 'Event', puis une instance de l'entité 'Participation' regroupant les 2 autres :";
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
var_dump($participation);
echo "\n";

echo "On crée une instance de 'ValidationParticipationSportsEvent', puis un lance la validation avec sa méthode 'startValidation' afin de vérifier (fictivement) si le participant possède un certificat médical :";
echo "\n";

$validSportsEvent = new ValidationParticipationSportsEvent();
$validSportsEvent->startValidation($participation);
echo "\n";

echo "On crée une instance de 'ValidationParticipationOutsideEvents', puis un lance la validation avec sa méthode 'startValidation' afin de vérifier (fictivement) si le nombre de places restante pour l'évènement est suffisant :";
echo "\n";

$validOutsideEvent = new ValidationParticipationOutsideEvents();
$validOutsideEvent->startValidation($participation);