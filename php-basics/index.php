<?php


require 'database/_init.php';

$tasks = QueryBuilder::get('tasks');

foreach ($tasks as $task) {
    echo "{$task->description} <hr>";
}

echo '<pre>';
var_dump($tasks);
echo '</pre>';
