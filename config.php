<?php


$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


// return this array globally it is used by and file that requires it
return [

    'app' => [
        'home_url' => $_ENV['APP_URL'],
    ],

    'database' => [
        'host' => $_ENV['DB_HOST'],
        'user' => $_ENV['USER'],
        'password' => $_ENV['PASSWORD'],
        'name' => $_ENV['DB_NAME'],
    ]

];
