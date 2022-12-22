<?php


class Task
{
    public $id;
    public $description;
    public $completed;
}

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=php_basics', 'root', '');
} catch (PDOException $e) {
    die($e->getMessage());
}

$query = $pdo->prepare('SELECT * FROM tasks');
$query->execute();

$tasks = $query->fetchAll(PDO::FETCH_CLASS, 'Task');

foreach ($tasks as $task) {
    echo "{$task->description} <hr>";
}

echo '<pre>';
var_dump($tasks);
echo '</pre>';
