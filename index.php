<?php

declare(strict_types=1);

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