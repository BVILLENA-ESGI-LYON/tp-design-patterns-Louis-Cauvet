<?php

declare(strict_types=1);


use EsgiIw\TpDesignPattern\Alert\Factory\EmailAlertContentFactory;
use EsgiIw\TpDesignPattern\Alert\Factory\SmsAlertContentFactory;

require_once 'vendor/autoload.php';

echo "---------------------------- Tests Abstract Factory ----------------------------";
echo "\n\n";

echo "<<<<<<<<<<< Test de l'envoi d'alertes par mail  >>>>>>>>>>>";
echo "\n";
echo "- On crée une instance de 'EmailAlertContentFactory', puis on lui demande de générer une instance de 'EmailAlertContent'.";
echo "\n\n";
echo "- On demande à l'instance de 'EmailAlertContent' d'informer par mail les admins de la validation d'un nouveau compte-utilisateur :";
echo "\n";
$emailAlertFactory = new EmailAlertContentFactory();
$emailAlert = $emailAlertFactory->createAlertContent();
$emailAlert->informAdminUserCreate();

echo "\n\n";

echo "- On demande ensuite à l'instance de 'EmailAlertContent' d'envoyer un rapppel par mail concernant un évènement à venir :";
echo "\n";
$emailAlert->sendEventReminder();

echo "\n\n";

echo "<<<<<<<<<<< Test de l'envoi d'alertes par sms  >>>>>>>>>>>";
echo "\n";
echo "- On crée une instance de 'SmsAlertContentFactory', puis on lui demande de générer une instance de 'SmsAlertContent'.";
echo "\n\n";
echo "- On demande à l'instance de 'SmsAlertContent' d'informer par sms les admins de la validation d'un nouveau compte-utilisateur :";
echo "\n";

$smsAlertFactory = new SmsAlertContentFactory();
$smsAlert = $smsAlertFactory->createAlertContent();
$smsAlert->informAdminUserCreate();

echo "\n\n";

echo "- On demande ensuite à l'instance de 'SmsAlertContent' d'envoyer une confirmation d'inscription à un évènement au participant qui vient de s'inscrire :";
echo "\n";
$smsAlert->confirmEventInscription();

