<?php


require 'database/_init.php';

$tasks = QueryBuilder::get('tasks');
QueryBuilder::insert('tasks', [
    "description" => 'task from index after passing data ',
    'completed' => 1,
]);

foreach ($tasks as $task) {
    echo "{$task->description} <hr>";
}

echo '<pre>';
var_dump($tasks);
echo '</pre>';
