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

    public static function delete()
    {
        // $id =  $_GET['id]
        if ($id = Request::get('id')) {
            QueryBuilder::delete('tasks', $id);
        }
        header('location: http://localhost/hsoub-php-internship/php-basics');
    }

    public static function update()
    {
        $id =  Request::get('id');
        $completed =   Request::get('completed');

        if ($id && $completed != null) {
            QueryBuilder::update('tasks', $id, [
                'completed' => $completed
            ]);
        }
        header('location: http://localhost/hsoub-php-internship/php-basics');
    }
}
