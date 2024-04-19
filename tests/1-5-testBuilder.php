<?php

declare(strict_types=1);


use EsgiIw\TpDesignPattern\Model\Mailer\MailerBuilder;

require_once 'vendor/autoload.php';

echo "---------------------------- Tests Builder ----------------------------";
echo "\n\n";

echo "<<<<<<<<<<< Test de la création d'un mail >>>>>>>>>>>";
echo "\n";
echo "- On instancie un builder de mail 'MailerBuilder', auquel on définit de base le sujet, le corps du mail et un premier destinataire : ";
echo "\n";
$mailBuilder = new MailerBuilder(
    "Rappel de la date d'évènement",
    "Bonjour, vous trouverez ci-joint un rappel de la date pour votre prochain evènement. A bientôt !",
    "lcauvet@myges.fr"
);
var_dump($mailBuilder);

echo "\n\n";

echo "- Selon différentes étapes définies dans le builder de mail, on lui ajoute d'autres destinataires, des adresses mails en copie carbone et une pièce jointe : ";
echo "\n";
$mailBuilder->addRecipient("pboyer@myges.fr");

$mailBuilder->addCopy("ternaud@myges.fr");
$mailBuilder->addCopy("flafarge@myges.fr");
$mailBuilder->addCopy("gdacosta@myges.fr");

$mailBuilder->addAttachment("pièce jointe.png");

var_dump($mailBuilder);

echo "\n\n";

echo "- On génère une instance de l'entité 'Mail' à partir de ce builder, ce qui nous donne le résultat suivant : ";
echo "\n";
$finalMail = $mailBuilder->getResult();
var_dump($finalMail);


