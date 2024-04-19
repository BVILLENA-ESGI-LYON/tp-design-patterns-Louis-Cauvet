<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Model\Database\DbConnection;
use EsgiIw\TpDesignPattern\Model\Mailer\MailerConnection;

require_once 'vendor/autoload.php';

echo "---------------------------- Tests Singleton ----------------------------";
echo "\n\n";

echo "<<<<<<<<<<< Test de la connexion à la base de données >>>>>>>>>>>";
echo "\n";
echo "- On instancie une connexion à la base de données, puis on regarde son hash SPL : ";
echo "\n";
$dbConnection = DbConnection::getInstance();
var_dump(spl_object_hash($dbConnection));
echo "\n";
echo "- On réutilise la fonction qui permet d'instancier une connexion à la base de données, et on compare son hash avec la première : ";
echo "\n";
$dbConnection2 = DbConnection::getInstance();
var_dump(spl_object_hash($dbConnection2));
echo "\n";
echo "- CONCLUSION : les 2 hash sont égaux, donc on utilise bien la même instance de connexion à la base de données à chaque fois ! On vérifie en comparant les 2 : ";
echo "\n";
var_dump($dbConnection === $dbConnection2);

echo "\n\n";

echo "<<<<<<<<<<< Test de la connexion au service de mail >>>>>>>>>>>";
echo "\n";
echo "- On instancie une connexion au service de mail, puis on regarde son hash SPL : ";
echo "\n";
$mailerConnection = MailerConnection::getInstance();
var_dump(spl_object_hash($mailerConnection));
echo "\n";
echo "- On réutilise la fonction qui permet d'instancier une connexion au service de mail, et on compare son hash avec la première : ";
echo "\n";
$mailerConnection2 = MailerConnection::getInstance();
var_dump(spl_object_hash($mailerConnection2));
echo "\n";
echo "- CONCLUSION : les 2 hash sont égaux, donc on utilise bien la même instance de connexion au service de mail à chaque fois ! On vérifie en comparant les 2 : ";
echo "\n";
var_dump($mailerConnection === $mailerConnection2);
