<?php

class Database
{
    private static string $DATABASE_ADRESS = "127.0.0.1:3307";
    private static string $DATABASE_NAME = "Ticketing";
    private static string $DATABASE_USERNAME = "root";
    private static string $DATABASE_PASSWORD = "azertyuiop";

    public static function Init(): ?PDO
    {
        try {
            return new PDO("mysql:host=" . Database::$DATABASE_ADRESS . ";dbname=" . database::$DATABASE_NAME,
            database::$DATABASE_USERNAME,database::$DATABASE_PASSWORD
            );
        } catch (PDOException $pdoExeption) {
            //Mes infos sont privé
        }
    }
}
