<?php

class QueryBuilder
{
    public static $pdo;

    public static function make(PDO $p) // make a $pdo = PDO  to deal with data base through it
    {
        self::$pdo = $p;
    }


    public static function get($table, $where = null) // take table name and compleded or not return data in the table
    {
        // $where is passed as ['completed' , '=' , $completed] then convert it to a stirng  'completed = 1 or 0'
        // check of $where is array ['completed' , '=' , $completed] then do the quere whih the condtion WHERE compleded = 1 or 0 else show all the data in the table 
        is_array($where) ? $query_string = " SELECT * FROM {$table} WHERE  " . implode(' ', $where) : $query_string = " SELECT * FROM {$table} ";

        $query = self::$pdo->prepare($query_string);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public static function insert($table, $data) // insert data into table
    {
        $get_key_names = implode(',', array_keys($data)); // get keys then separate with , put them to a string
        $get_data_count = str_repeat('?,', count(array_keys($data)) - 1) . '?'; // get the count of the array keys -1 then print ? by this count then concatinate ,?  to get final result ?,? ..count times 

        // ( ?, ? ) or (:description, :completed) these come from an array  first index second index
        $query = self::$pdo->prepare(" INSERT INTO $table ($get_key_names) VALUES ($get_data_count) ");
        $query->execute(array_values($data)); // we use array_valuse bec it is an associative array
    }

    public static function update($table, $id, $data)
    {
        $get_key_names = implode(' = ? , ', array_keys($data)) . ' = ?';
        // first inded ? second index ?
        $query = self::$pdo->prepare(" UPDATE {$table} SET {$get_key_names} WHERE id = $id ");
        $query->execute(array_values($data)); // we use array_valuse bec it is an associative array
    }

    public static function delete($table, $id, $column = 'id', $operator = '=') // by defauld delete from "id" column "= for example use > 0 to delete allS" "id value"
    {
        $query = self::$pdo->prepare(" DELETE FROM {$table} WHERE {$column} {$operator} {$id} ");
        $query->execute();
    }
}
