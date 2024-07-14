<?php

 class  DB
{
    private static $USER = 'root';
    private static $BD = 'mglsi_news';
    private static $SERVER = 'localhost';
    private static $PASSWORD = "";
    public static function getInstance()
    {
        try {
            $dns = "mysql:host=".self::$SERVER.";dbname=".self::$BD;
            $pdo = new PDO($dns, self::$USER, self::$PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch (PDOException $e){
            echo 'connexion failed: '.$e->getMessage();
        }
    }
}