<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Model\Database\DbConnection;
use EsgiIw\TpDesignPattern\Model\Mailer\MailerConnection;

require_once 'vendor/autoload.php';

// Test du singleton de la connexion à la bdd
echo "Test Singleton  connexion à une bdd :";
echo "\n";
$dbConnection = DbConnection::getInstance();
var_dump(spl_object_hash($dbConnection));
$dbConnection2 = DbConnection::getInstance();
var_dump(spl_object_hash($dbConnection2));
var_dump($dbConnection === $dbConnection2);

echo "\n\n";

// Test du singleton de la connexion au service de mail
echo "Test Singleton connexion au service de mail :";
$mailerConnection = MailerConnection::getInstance();
var_dump(spl_object_hash($mailerConnection));
$mailerConnection2 = MailerConnection::getInstance();
var_dump(spl_object_hash($mailerConnection2));
var_dump($mailerConnection === $mailerConnection2);
