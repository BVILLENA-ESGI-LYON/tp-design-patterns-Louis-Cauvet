<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Model\Entity\Event\Event;
use EsgiIw\TpDesignPattern\Model\Entity\Event\LimitedEvent;
use EsgiIw\TpDesignPattern\Model\Entity\Event\OutsideEvent;
use EsgiIw\TpDesignPattern\Model\Entity\Event\SportsEvent;

require_once 'vendor/autoload.php';

// Test des décorateurs d'évènements
$event = (new Event())
    ->setId(1)
    ->setName("Sortie piscine")
    ->setDescription('Une journée rafraichissante !')
    ->setStartDate(new \DateTime('2024-08-07 09:30'))
    ->setEndDate(new \DateTime('2024-08-07 17:30'));

echo "Test Décorator Evènement en extérieur :";
echo "\n";
$outsideEvent = new OutsideEvent($event, "36 Rue du Peuplier");
echo $outsideEvent->getLocalization();

echo "\n\n";

echo $event->getName();
echo "\n";
$outsideEvent->setName("Baignade à la mer");
echo $event->getName();

echo "\n\n\n";

echo "Test Décorator Evènement sportif :";
echo "\n";
$sportsEvent = new SportsEvent($event, true);
echo $sportsEvent->getMedicalCertificate();

echo "\n\n";

$sportsEvent->setMedicalCertificate(false);
echo $sportsEvent->getMedicalCertificate();

echo "\n\n\n";

echo "Test Décorator Evènement à places limitées :";
echo "\n";
$limitedEvent = new LimitedEvent($event, 50);
echo $limitedEvent->getNbPlaces();

echo "\n\n";

echo $limitedEvent->getDescription();
echo "\n";
$limitedEvent->setDescription("Une journée de folie dans la chaleur de l'été !");
echo $limitedEvent->getDescription();
