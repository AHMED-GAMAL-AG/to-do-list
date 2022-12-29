<?php

class TaskController
{
    public static function index()
    {
        $tasks = QueryBuilder::get('tasks'); // tasks is the table name

        require 'resources/index.view.php';
    }

    public static function create()
    {
        $description = Request::get('description');

        QueryBuilder::insert('tasks', [
            'description' => $description
        ]);

        header('location: http://localhost/hsoub-php-internship/php-basics');
    }
}
