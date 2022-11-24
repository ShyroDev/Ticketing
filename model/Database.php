<?php

class Database
{
    private static string $DATABASE_ADRESS = "";
    private static string $DATABASE_NAME = "";
    private static string $DATABASE_USERNAME = "";
    private static string $DATABASE_PASSWORD = "p";

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
