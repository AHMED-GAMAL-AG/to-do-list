<?php

class QueryBuilder
{
    public static $pdo;

    public static function make(PDO $p)
    {
        self::$pdo = $p;
    }


    public static function get(string $table)
    {
        $query = self::$pdo->prepare("SELECT * FROM {$table}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
