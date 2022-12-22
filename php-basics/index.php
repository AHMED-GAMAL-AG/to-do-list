<?php


require 'database/_init.php';

$tasks = QueryBuilder::get('tasks');
QueryBuilder::update('tasks', 3, [
    'description' => 'updated task from index',
    'completed' => 1,
]);

QueryBuilder::delete('tasks' , 0 ,'id' , '>'); // delete from tasks where id > 0

// QueryBuilder::insert('tasks', [
//     "description" => 'task from index after passing data ',
//     'completed' => 1,
// ]);

foreach ($tasks as $task) {
    echo "{$task->description} <hr>";
}

echo '<pre>';
var_dump($tasks);
echo '</pre>';
