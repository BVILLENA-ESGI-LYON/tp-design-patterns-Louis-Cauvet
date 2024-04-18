<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Model\Entity\Event\Event;
use EsgiIw\TpDesignPattern\Observer\EventModification;
use EsgiIw\TpDesignPattern\Observer\Observer;
use EsgiIw\TpDesignPattern\Publisher\Publisher;

require_once 'vendor/autoload.php';

// Test des observers

echo "Test Observers sur la modification (fictive) d'un évènement :";
echo "\n";

$observer1 = new Observer("J'ai attendu la modification d'un évènement pour écrire ce message");
$observer2 = new Observer("Moi aussi je l'ai attendu, foi d'observeur !");

$eventPublisher = new Publisher();
$eventPublisher
    ->addEventObserver('event:modified', $observer1)
    ->addEventObserver('event:modified', $observer2);

$eventModification = new EventModification($eventPublisher);

$fictiveEvent = new Event();

$eventModification->modifyEvent($fictiveEvent);


