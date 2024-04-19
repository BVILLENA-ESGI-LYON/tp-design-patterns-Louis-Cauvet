<?php

declare(strict_types=1);


use EsgiIw\TpDesignPattern\Model\Entity\Contact\ContactFactory;

require_once 'vendor/autoload.php';

echo "---------------------------- Tests Object Factory ----------------------------";
echo "\n\n";

echo "<<<<<<<<<<< Test de la création de demande de contact (par formulaire) >>>>>>>>>>>";
echo "\n";
echo "- On demande à la factory d'entité 'Contact' de créer une demande de contact de type 'formulaire', et de récupérer les infos propres à cette demande de contact : ";
echo "\n";
$contactForm = ContactFactory::createContact("formulaire");
echo $contactForm->getNomPersonne()." a envoyé le message : ".$contactForm->getMessage();

echo "\n\n";

echo "<<<<<<<<<<< Test de la création de demande de contact (par mail) >>>>>>>>>>>";
echo "\n";
echo "- On demande à la factory d'entité 'Contact' de créer une demande de contact de type 'email', et de récupérer les infos propres à cette demande de contact : ";
echo "\n";
$contactMail = ContactFactory::createContact("email");
echo $contactMail->getNomPersonne()." a envoyé le message : ".$contactMail->getMessage();

echo "\n\n";

echo "<<<<<<<<<<< Test de la création d'une demande de contact inexistante >>>>>>>>>>>";
echo "\n";
echo "- On demande à la factory d'entité 'Contact' de créer une demande de contact de type 'inexistante', dont le type n'existe pas dans notre application : ";
echo "\n";
$contactInconnu = ContactFactory::createContact("inconnu");

echo "\n\n";
echo "- CONCLUSION : Une factory d'entité permet de générer différentes entités similaires, mais avec des propriétés différentes selon le type qui leur est affecté";
