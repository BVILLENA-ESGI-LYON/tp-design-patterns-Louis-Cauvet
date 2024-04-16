<?php

declare(strict_types=1);

namespace EsgiIw\TpDesignPattern\Model\Database;

final class DbConnection
{
    /**
     * Le champ qui possèdera la seule instance de DbConnection possible 
     */
    private static ?DbConnection $instance = null;

    /**
     * La fonction permettant de récupérer l'instance de DbConnection
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
