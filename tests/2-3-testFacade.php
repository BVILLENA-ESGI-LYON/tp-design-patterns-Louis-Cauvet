<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Repository\Repository;
use EsgiIw\TpDesignPattern\Model\Controller\EventController;
use EsgiIw\TpDesignPattern\Model\Controller\UserController;
use EsgiIw\TpDesignPattern\Model\Entity\Event\Event;
use EsgiIw\TpDesignPattern\Model\Entity\User\User;

require_once 'vendor/autoload.php';

// Test de la facade
echo "Test Facade sur les évènements et les utilisateurs : ";
echo "\n";

$tabEvents = [
    (new Event())
        ->setId(1)
        ->setName("Tournoi en extérieur")
        ->setDescription('Une journée inoubliable avec les meilleures activités en plein-air !')
        ->setStartDate(new \DateTime('2024-05-12 14:30'))
        ->setEndDate(new \DateTime('2024-05-14 19:30')),

    (new Event())
        ->setId(2)
        ->setName("Sortie piscine")
        ->setDescription('Une journée rafraichissante !')
        ->setStartDate(new \DateTime('2024-08-07 09:30'))
        ->setEndDate(new \DateTime('2024-08-07 17:30')),
];

$tabUsers = [
    (new User())
        ->setId(1)
        ->setFirstname("Louis")
        ->setLastname("Cauvet")
        ->setEmail('louiscauvet8@gmail.com'),

    (new User())
        ->setId(2)
        ->setFirstname("Victor")
        ->setLastname("Mashapoa")
        ->setEmail('vmashapoa@gmail.com'),
];

$eventsController = new EventController($tabEvents);
$usersController = new UserController($tabUsers);

$repo = new Repository($eventsController, $usersController);

var_dump($repo->getEventDetail(1));

echo "\n\n";

var_dump($repo->getUserDetail(2));

echo "\n\n";

echo "Taille du tableau d'évènements avant suppression : ";
echo "\n";
var_dump(count($eventsController->getTabEvents()));

echo "\n\n";

$repo->deleteEvent(1);
echo "Taille du tableau d'évènements après suppression : ";
echo "\n";
var_dump(count($eventsController->getTabEvents()));
