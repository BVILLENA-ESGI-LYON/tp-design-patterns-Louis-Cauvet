<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Logger\LoggerWithStrategies;
use EsgiIw\TpDesignPattern\Logger\Strategy\DatabaseLogStrategy;
use EsgiIw\TpDesignPattern\Logger\Strategy\FileDebugLogStrategy;
use EsgiIw\TpDesignPattern\Logger\Strategy\FileLogStrategy;
use EsgiIw\TpDesignPattern\Logger\Strategy\SendAdminEmailLogStrategy;

require_once 'vendor/autoload.php';

// Test des strategy
$logger = new LoggerWithStrategies();
$logger
    ->addStrategy(new FileLogStrategy())
    ->addStrategy(new FileDebugLogStrategy())
    ->addStrategy(new DatabaseLogStrategy())
    ->addStrategy(new SendAdminEmailLogStrategy());

echo "Test Strategy d'un message de debug (doit être enregistré dans le fichier 'debug.log' seulement) :";
echo "\n";
$logger->debug('J\'utilise des strategies !');

echo "\n\n";

echo "Test Strategy d'un message de warning (doit être enregistré dans le fichier de log classique) :";
echo "\n";
$logger->warning('La solution de "logger" n\'est pas entièrement implémentée.');

echo "\n\n";

echo "Test Strategy d'un message d'error (doit être enregistré dans le fichier de log classique et en bdd) :";
echo "\n";
$logger->error('L\'extension "pdo" est manquante !');

echo "\n\n";

echo "Test Strategy d'un message critique (doit être enregistré dans le fichier de log classique, en BDD et notifié par mail à l\'administrateur) :";
echo "\n";
$logger->critical('Les secrets de l\'application sont écrits en dur !.');