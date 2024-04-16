<?php

declare(strict_types=1);

namespace src\Model\Mailer;

final class MailerConnection
{
    /**
     * Le champ qui possèdera la seule instance de MailerConnection possible
     */
    private static ?MailerConnection $instance = null;

    /**
     * La fonction permettant de récupérer l'instance de MailerConnection
     */
    public static function getInstance(): static
    {
        // si aucune instance n'existe, on la créé
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Le constructeur est en privé pour qu'on ne puisse pas y accéder de l'extérieur
     */
    private function __construct()
    {
    }
}
