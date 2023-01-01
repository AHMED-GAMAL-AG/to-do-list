<?php

namespace App\Controllers; // could be any name but this is the common aprouch used to make it uniqe if i want to make a class with the same name

use App\Core\Request;
use App\Database\QueryBuilder;

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

        // function comes from helper.php file required in _init.php
        view('index', [
            'tasks' => $tasks,
        ]);
    }

    public static function create()
    {
        $description = Request::get('description');

        QueryBuilder::insert('tasks', [
            'description' => $description
        ]);
        back(); // use back instead of header("location: {$_SERVER['HTTP_REFERER']}"); // to show the last page i was on for ex if iam on قيد التنفيذ then return it not allways go to index
    }

    public static function delete()
    {
        // $id =  $_GET['id]
        if ($id = Request::get('id')) {
            QueryBuilder::delete('tasks', $id);
        }

        back(); // use back instead of header("location: {$_SERVER['HTTP_REFERER']}"); // to show the last page i was on for ex if iam on قيد التنفيذ then return it not allways go to index
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
        back(); // use back instead of header("location: {$_SERVER['HTTP_REFERER']}"); // to show the last page i was on for ex if iam on قيد التنفيذ then return it not allways go to index
    }
}
