<?php

namespace App\Database; // could be any name but this is the common aprouch used to make it uniqe if i want to make a class with the same name

class QueryBuilder
{
    public static $pdo;
    public static $log;

    public static function make(\PDO $p, $l = null) // make a $pdo = PDO  to deal with data base through it
    {
        self::$pdo = $p;
        self::$log = $l;
    }


    public static function get($table, $where = null) // take table name and compleded or not return data in the table
    {
        // $where is passed as ['completed' , '=' , $completed] then convert it to a stirng  'completed = 1 or 0'
        // check of $where is array ['completed' , '=' , $completed] then do the quere whih the condtion WHERE compleded = 1 or 0 else show all the data in the table 
        is_array($where) ? $query_string = " SELECT * FROM {$table} WHERE  " . implode(' ', $where) : $query_string = " SELECT * FROM {$table} ";

        $query = self::execute($query_string);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_OBJ);
    }

    public static function insert($table, $data) // insert data into table
    {
        $get_key_names = implode(',', array_keys($data)); // get keys then separate with , put them to a string
        $get_data_count = str_repeat('?,', count(array_keys($data)) - 1) . '?'; // get the count of the array keys -1 then print ? by this count then concatinate ,?  to get final result ?,? ..count times 

        // ( ?, ? ) or (:description, :completed) these come from an array  first index second index
        $query = " INSERT INTO $table ($get_key_names) VALUES ($get_data_count) ";
        self::execute($query, array_values($data)); // we use array_valuse bec it is an associative array
    }

    public static function update($table, $id, $data)
    {
        $get_key_names = implode(' = ? , ', array_keys($data)) . ' = ?';
        // first inded ? second index ?
        $query = " UPDATE {$table} SET {$get_key_names} WHERE id = $id ";

        self::execute($query, array_values($data)); // we use array_valuse bec it is an associative array
    }

    public static function delete($table, $id, $column = 'id', $operator = '=') // by defauld delete from "id" column "= for example use > 0 to delete allS" "id value"
    {
        $query = " DELETE FROM {$table} WHERE {$column} {$operator} {$id} ";
        self::execute($query);
    }

    public static function execute($query, $values = null) // to execute the query without repeating my self
    {
        if(self::$log)
        {
            self::$log->info($query); // when any query is done save it to query.log file
        }

        $statment = self::$pdo->prepare($query);
        $statment->execute($values);
        return $statment;
    }
}
