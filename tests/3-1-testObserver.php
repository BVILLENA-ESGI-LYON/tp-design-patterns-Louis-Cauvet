<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Model\Entity\Event\Event;
use EsgiIw\TpDesignPattern\Observer\EventModification;
use EsgiIw\TpDesignPattern\Observer\Observer;
use EsgiIw\TpDesignPattern\Publisher\Publisher;

require_once 'vendor/autoload.php';

echo "---------------------------- Tests Observer ----------------------------";
echo "\n\n";

echo "<<<<<<<<<<< Test de l'ajout d'observers lors de la modification d'un évènement >>>>>>>>>>>";
echo "\n";

echo "- On met en place 2 instances de la classe 'Observer', qui ont pour rôle de renvoyer un message à l'utilisateur. ";
echo "\n";
$observer1 = new Observer("J'ai attendu la modification d'un évènement pour écrire ce message");
$observer2 = new Observer("Moi aussi je l'ai attendu, foi d'observeur !");

echo "- On attribue ces observers à une instance de 'Publisher', et on leur indique l'écouteur d'évènement 'event:modified' qui désigne la modification d'un évènement.";
echo "\n";
$eventPublisher = new Publisher();
$eventPublisher
    ->addEventObserver('event:modified', $observer1)
    ->addEventObserver('event:modified', $observer2);

echo "- On crée une instance de 'EventModification' en lui passant l'instance de 'Publisher' en paramètres, puis on simule la modification d'un évènement fictif pour vérifier si les écouteurs d'évènements placés se déclanchent bien :";
echo "\n";
$eventModification = new EventModification($eventPublisher);

$fictiveEvent = new Event();

$eventModification->modifyEvent($fictiveEvent);


