<?php

declare(strict_types=1);


use EsgiIw\TpDesignPattern\Model\Mailer\MailerBuilder;

require_once 'vendor/autoload.php';

// Test du builder avec la construction d'un mail
echo "Test Builder création d'un mail :";
echo "\n";

$mailBuilder = new MailerBuilder(
    "Rappel de la date d'évènement",
    "Bonjour, vous trouverez ci-joint un rappel de la date pour votre prochain evènement. A bientôt !",
    "lcauvet@myges.fr"
);

var_dump($mailBuilder);

echo "\n\n";

$mailBuilder->addRecipient("pboyer@myges.fr");

$mailBuilder->addCopy("ternaud@myges.fr");
$mailBuilder->addCopy("flafarge@myges.fr");
$mailBuilder->addCopy("gdacosta@myges.fr");

$mailBuilder->addAttachment("pièce jointe.png");

var_dump($mailBuilder);

echo "\n\n";

$finalMail = $mailBuilder->getResult();
var_dump($finalMail);


