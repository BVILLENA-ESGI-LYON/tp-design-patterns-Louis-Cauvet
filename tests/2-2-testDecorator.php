<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Model\Entity\Event\Event;
use EsgiIw\TpDesignPattern\Model\Entity\Event\LimitedEvent;
use EsgiIw\TpDesignPattern\Model\Entity\Event\OutsideEvent;
use EsgiIw\TpDesignPattern\Model\Entity\Event\SportsEvent;

require_once 'vendor/autoload.php';

echo "---------------------------- Tests Decorator ----------------------------";
echo "\n\n";

echo "<<<<<<<<<<< Test de l'ajout de besoins pour un évènement en extérieur >>>>>>>>>>>";
echo "\n";
echo "- On crée une nouvelle instance de l'entité 'Event' :  ";
echo "\n";
$event = (new Event())
    ->setId(1)
    ->setName("Sortie piscine")
    ->setDescription('Une journée rafraichissante !')
    ->setStartDate(new \DateTime('2024-08-07 09:30'))
    ->setEndDate(new \DateTime('2024-08-07 17:30'));
var_dump($event);

echo "\n";

echo "On instancie un nouvel évènement en extérieur, reposant sur l'instance initialement créée, et on lui ajoute un critère de localisation :";
echo "\n";
$outsideEvent = new OutsideEvent($event, "36 Rue du Peuplier");
echo $outsideEvent->getLocalization();
echo "\n";

echo "On vérifie que le nouvel évènement en extérieur créé possède aussi les attributs de l'évènement de base (ici on regarde son nom) :";
echo "\n";
echo $event->getName();
echo "\n";

echo "On vérifie qu'on peut mettre à jour les attributs issus de l'évènement de base sur le nouvel évènement, en modifiant son nom :";
echo "\n";
$outsideEvent->setName("Baignade à la mer");
echo $event->getName();

echo "\n\n";

echo "<<<<<<<<<<< Test de l'ajout de besoins pour un évènement sportif >>>>>>>>>>>";
echo "\n";
echo "On instancie un nouvel évènement sportif, reposant sur l'instance initialement créée, et on lui ajoute un critère de certificat médical (booléen pour indiquer si il est nécéssaire ou non) :";
echo "\n";
$sportsEvent = new SportsEvent($event, true);
echo $sportsEvent->getMedicalCertificate();
echo "\n";

echo "On vérifie que le nouvel évènement sportif créé possède aussi les attributs de l'évènement de base (ici on regarde sa description) :";
echo "\n";
echo $sportsEvent->getDescription();
echo "\n";

echo "On vérifie qu'on peut mettre à jour les attributs issus de l'évènement de base sur le nouvel évènement, en modifiant sa description :";
echo "\n";
$sportsEvent->setDescription("Une journée de folie dans la chaleur de l'été !");
echo $sportsEvent->getDescription();

echo "\n\n";

echo "<<<<<<<<<<< Test de l'ajout de besoins pour un évènement à places limitées >>>>>>>>>>>";
echo "\n";
echo "On instancie un nouvel évènement à places limitées, reposant sur l'instance initialement créée, et on lui ajoute un critère de nombre de places limites :";
echo "\n";
$limitedEvent = new LimitedEvent($event, 50);
echo $limitedEvent->getNbPlaces();
echo "\n";

echo "On vérifie qu'on peut mettre à jour l'attribut exclusif aux évènements à places limitées, en modifiant sa valeur :";
echo "\n";
$limitedEvent->setNbPlaces(350);
echo $limitedEvent->getNbPlaces();

