<?php


$description = Request::get('description');

QueryBuilder::insert('tasks', [
    'description' => $description,
]);

header('location: http://localhost/hsoub-php-internship/php-basics');
