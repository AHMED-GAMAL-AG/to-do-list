<?php

namespace App\Database; // could be any name but this is the common aprouch used to make it uniqe if i want to make a class with the same name


class DBconnection
{
    public static $pdo;

    public static function connect($config) // connect to database set host name database name ect..
    {
        try {
            // if (self::$pdo != null) {
            //     self::$pdo = self::$pdo;
            // }else {
            //     self::$pdo = new PDO('mysql:host=localhost;dbname=php_basics', 'root', '')
            // } // use the ternary opperator for a short hand

            self::$pdo = self::$pdo ?: new \PDO("mysql:host={$config['host']}; dbname={$config['name']}", $config['user'], $config['password']);
            return self::$pdo;
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}
