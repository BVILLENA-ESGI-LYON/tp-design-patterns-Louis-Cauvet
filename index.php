<?php

declare(strict_types=1);

use src\Model\Entity\Event;
use src\Model\Adapter\Event\Export\EventJsonExport;
use src\Model\Adapter\Event\Export\EventCsvExport;
use src\Model\Database\DbConnection;
use src\Model\Database\MailerConnection;

require_once 'vendor/autoload.php';

// Test du singleton de la connexion à la bdd
$dbConnection = DbConnection::getInstance();
var_dump(spl_object_hash($dbConnection));
$dbConnection2 = DbConnection::getInstance();
var_dump(spl_object_hash($dbConnection2));
var_dump($dbConnection === $dbConnection2);

// Test du singleton de la connexion au service de mail
$mailerConnection = MailerConnection::getInstance();
var_dump(spl_object_hash($mailerConnection));
$mailerConnection2 = MailerConnection::getInstance();
var_dump(spl_object_hash($mailerConnection2));
var_dump($mailerConnection === $mailerConnection2);



$event = new Event(1, "Super évènement", "Une journée inoubliable avec les meilleures activités en plein-air", "12/05/2024", "15/05/2024");

// Test de l'adapter de l'export d'un évènement en JSON
$exportEventJson = new EventJsonExport($event);
$eventJson = $exportEventJson->convert();
var_dump($eventJson);

// Test de l'adapter de l'export d'un évènement en CSV
$exportEventCsv = new EventCsvExport($event);
$eventCsv = $exportEventCsv->convert();
var_dump($eventCsv);