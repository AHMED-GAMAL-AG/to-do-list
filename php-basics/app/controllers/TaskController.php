<?php

class TaskController
{
    public static function index()
    {
        $completed = Request::get('completed'); // if there is 'completed in the url' /hsoub-php-internship/php-basics/?completed=0 then passed to the variable 1 or 0

        if ($completed != null) {
            $tasks = QueryBuilder::get('tasks', ['completed', '=', $completed]); // tasks is the table name
        } else {
            $tasks = QueryBuilder::get('tasks');
        }
        require 'resources/index.view.php'; // the variable $ tasks is used in resources/index.view.php 
    }

    public static function create()
    {
        $description = Request::get('description');

        QueryBuilder::insert('tasks', [
            'description' => $description
        ]);
        header("location: {$_SERVER['HTTP_REFERER']}"); // to show the last page i was on for ex if iam on قيد التنفيذ then return it not allways go to index
    }

    public static function delete()
    {
        // $id =  $_GET['id]
        if ($id = Request::get('id')) {
            QueryBuilder::delete('tasks', $id);
        }

        header("location: {$_SERVER['HTTP_REFERER']}"); // to show the last page i was on for ex if iam on قيد التنفيذ then return it not allways go to index
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
        header("location: {$_SERVER['HTTP_REFERER']}"); // to show the last page i was on for ex if iam on قيد التنفيذ then return it not allways go to index
    }
}
