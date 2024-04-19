<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Repository\Repository;
use EsgiIw\TpDesignPattern\Model\Controller\EventController;
use EsgiIw\TpDesignPattern\Model\Controller\UserController;
use EsgiIw\TpDesignPattern\Model\Entity\Event\Event;
use EsgiIw\TpDesignPattern\Model\Entity\User\User;

require_once 'vendor/autoload.php';

echo "---------------------------- Tests Facade ----------------------------";
echo "\n\n";

echo "<<<<<<<<<<< Test de la gestion des utilisateurs et des évènements avec la façade >>>>>>>>>>>";
echo "\n";

echo "- On construit un tableau d'évènements, et un tableau d'utilisateurs, puis on instancie un contrôleur pour chaque entité en lui passant son tableau respectif en paramètres.";
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

echo "- On instancie ensuite un repository, en lui passant en paramètres les 2 contrôleurs précédemment créées.";
echo "\n";
$repo = new Repository($eventsController, $usersController);

echo "- On récupère le détail de l'évènement que l'on souhaite (ici celui avec l'id 1) grâce à la fonction 'getEventDetail' du repository : ";
echo "\n";
var_dump($repo->getEventDetail(1));

echo "\n\n";

echo "- On récupère le détail de l'utilisateur que l'on souhaite (ici celui avec l'id 2) grâce à la fonction 'getUserDetail' du repository : ";
echo "\n";
var_dump($repo->getUserDetail(2));

echo "\n\n";

echo "On regarde la taille du tableau des évènements que gère le contrôleur : ";
echo "\n";
var_dump(count($eventsController->getTabEvents()));

echo "\n\n";

echo "On supprime un élément de ce tableau, puis on vérifie que sa taille à bien diminuée : ";
echo "\n";
$repo->deleteEvent(1);
var_dump(count($eventsController->getTabEvents()));
