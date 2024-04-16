<?php

declare(strict_types=1);


use EsgiIw\TpDesignPattern\Logger\Factory\BddLoginAlertFactory;
use EsgiIw\TpDesignPattern\Logger\Factory\EmailLoginAlertFactory;
use EsgiIw\TpDesignPattern\Logger\Factory\FileLoginAlertFactory;

require_once 'vendor/autoload.php';

// Test des Factory Method pour la gestion des logs
echo "Test Factory Method pour l'écriture de logs dans le fichier de log :";
echo "\n";
$fileLog = new FileLoginAlertFactory();
$fileLog->logError("Erreur : je dois être écrite dans le fichier de logs");

echo "\n\n";

echo "Test Factory Method pour l'écriture de logs dans la base de données :";
echo "\n";
$bddLog = new BddLoginAlertFactory();
$bddLog->logError("Erreur : je dois être écrite dans la base de données");

echo "\n\n";

echo "Test Factory Method pour l'écriture de logs dans un mail pour les admins :";
echo "\n";
$bddLog = new EmailLoginAlertFactory();
$bddLog->logError("Erreur : je dois être envoyée par mail aux admins");
