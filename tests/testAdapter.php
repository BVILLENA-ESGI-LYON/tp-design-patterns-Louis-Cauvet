<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Model\Entity\Event;
use EsgiIw\TpDesignPattern\Adapter\Event\Export\EventJsonExport;
use EsgiIw\TpDesignPattern\Adapter\Event\Export\EventCsvExport;

require_once 'vendor/autoload.php';

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

    (new Event())
        ->setId(3)
        ->setName("Tournée des bars")
        ->setDescription('Venez vous mettre des caisses')
        ->setStartDate(new \DateTime('2024-10-28 21:00'))
        ->setEndDate(new \DateTime('2024-10-28 23:30')),
];

// Test de l'adapter de l'export d'un évènement en JSON
echo "Test Adapter export d'un évènement en JSON :";
echo "\n";
$exportEventJson = new EventJsonExport($tabEvents);
echo $exportEventJson->convert();

echo "\n\n";

// Test de l'adapter de l'export d'un évènement en CSV
echo "Test Adapter export d'un évènement en CSV :";
echo "\n";
$exportEventCsv = new EventCsvExport($tabEvents);
echo $exportEventCsv->convert();