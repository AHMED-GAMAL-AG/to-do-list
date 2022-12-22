<?php

class DBconnection
{
    public static $pdo;

    public static function connect()
    {
        try {
            // if (self::$pdo != null) {
            //     self::$pdo = self::$pdo;
            // }else {
            //     self::$pdo = new PDO('mysql:host=localhost;dbname=php_basics', 'root', '')
            // } // use the ternary opperator for a short hand

            self::$pdo = self::$pdo ?: new PDO('mysql:host=127.0.0.1;dbname=php_basics', 'root', '');
            return self::$pdo;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
