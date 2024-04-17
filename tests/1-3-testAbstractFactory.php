<?php

declare(strict_types=1);


use EsgiIw\TpDesignPattern\Alert\Factory\EmailAlertContentFactory;
use EsgiIw\TpDesignPattern\Alert\Factory\SmsAlertContentFactory;

require_once 'vendor/autoload.php';

// Test des Abstract Method pour la gestion des logs
echo "Test Abstract Factory pour l'envoi d'alertes par mail :";
echo "\n";
$emailAlertFactory = new EmailAlertContentFactory();
$emailAlert = $emailAlertFactory->createAlertContent();
$emailAlert->informAdminUserCreate();

echo "\n\n";

$emailAlert->sendEventReminder();

echo "\n\n";

$smsAlertFactory = new SmsAlertContentFactory();
$smsAlert = $smsAlertFactory->createAlertContent();
$smsAlert->informAdminUserCreate();

echo "\n\n";

$smsAlert->confirmEventInscription();

