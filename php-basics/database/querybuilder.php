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
        $query = self::$pdo->prepare(" SELECT * FROM {$table} ");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public static function insert($table, $data)
    {
        $get_key_names = implode(',', array_keys($data)); // get keys then separate with , put them to a string
        $get_data_count = str_repeat('?,', count(array_keys($data)) - 1) . '?'; // get the count of the array keys -1 then print ? by this count then concatinate ,?  to get final result ?,? ..count times 

        // ( ?, ? ) or (:description, :completed) these come from an array  first index second index
        $query = self::$pdo->prepare(" INSERT INTO $table ($get_key_names) VALUES ($get_data_count) ");
        $query->execute(array_values($data));
    }
}
