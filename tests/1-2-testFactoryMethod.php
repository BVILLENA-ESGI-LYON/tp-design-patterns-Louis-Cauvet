<?php

declare(strict_types=1);


use EsgiIw\TpDesignPattern\Logger\Factory\BddLoginAlertFactory;
use EsgiIw\TpDesignPattern\Logger\Factory\EmailLoginAlertFactory;
use EsgiIw\TpDesignPattern\Logger\Factory\FileLoginAlertFactory;

require_once 'vendor/autoload.php';

echo "---------------------------- Tests Factory Method ----------------------------";
echo "\n\n";

echo "<<<<<<<<<<< Test de l'écriture dans le fichier de logs >>>>>>>>>>>";
echo "\n";
echo "- On instancie une factory 'FileLoginAlertFactory', qui crée automatiquement une instance de 'FileLoginAlert', puis on utilise la fonction 'logError' dont elle hérite de 'LoginAlertInterface' : ";
echo "\n";
$fileLog = new FileLoginAlertFactory();
$fileLog->logError("Erreur : je dois être écrite dans le fichier de logs");
echo "\n";
echo "- On constate que les actions de l'instance de 'FileLoginAlert', et de la fonction 'logError' de 'FileLoginAlertFactory' se sont cumulées !";
echo "\n";

echo "\n\n";

echo "<<<<<<<<<<< Test de l'écriture dans de logs dans la base de données >>>>>>>>>>>";
echo "\n";
echo "- On instancie une factory 'BddLoginAlertFactory', qui crée automatiquement une instance de 'BddLoginAlert', puis on utilise la fonction 'logError' dont elle hérite de 'LoginAlertInterface' : ";
echo "\n";
$bddLog = new BddLoginAlertFactory();
$bddLog->logError("Erreur : je dois être écrite dans la base de données");
echo "\n";
echo "- On constate que les actions de l'instance de 'BddLoginAlert', et de la fonction 'logError' de 'BddLoginAlertFactory' se sont cumulées !";
echo "\n";

echo "\n\n";

echo "<<<<<<<<<<< Test de l'écriture de logs dans un mail pour les admins >>>>>>>>>>>";
echo "\n";
echo "- On instancie une factory 'EmailLoginAlertFactory', qui crée automatiquement une instance de 'EmailLoginAlert', puis on utilise la fonction 'logError' dont elle hérite de 'LoginAlertInterface' : ";
echo "\n";
$bddLog = new EmailLoginAlertFactory();
$bddLog->logError("Erreur : je dois être envoyée par mail aux admins");
echo "\n";
echo "- On constate que les actions de l'instance de 'EmailLoginAlert', et de la fonction 'logError' de 'EmailLoginAlertFactory' se sont cumulées !";
echo "\n";

echo "\n\n";
echo "- CONCLUSION : A partir d'une même interface, on peut produire plusieurs factories qui génère automatiquement d'autres instances avec des fonctionnements qui leur sont propres.";
