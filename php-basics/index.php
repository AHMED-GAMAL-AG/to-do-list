<?php
require '_init.php';

$tasks = QueryBuilder::get('tasks');

// QueryBuilder::update('tasks', 3, [
//     'description' => 'updated task from index',
//     'completed' => 1,
// ]);

// QueryBuilder::delete('tasks' , 0 ,'id' , '>'); // delete from tasks where id > 0

// QueryBuilder::insert('tasks', [
//     "description" => 'third task',
//     'completed' => 1,
// ]);

    require 'index.view.php';
?>


