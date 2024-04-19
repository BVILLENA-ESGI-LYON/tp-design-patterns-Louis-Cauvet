<?php

declare(strict_types=1);


use EsgiIw\TpDesignPattern\Model\Entity\Contact\ContactFactory;

require_once 'vendor/autoload.php';

// Test des Abstract Method pour la gestion des logs
echo "Test Object Factory pour la création de contacts (par mail ou formulaire):";
echo "\n";
$contactForm = ContactFactory::createContact("formulaire");
echo $contactForm->getNomPersonne()." a envoyé le message : ".$contactForm->getMessage();

echo "\n\n";

$contactMail = ContactFactory::createContact("email");
echo $contactMail->getNomPersonne()." a envoyé le message : ".$contactMail->getMessage();

echo "\n\n";

$contactInconnu = ContactFactory::createContact("inconnu");