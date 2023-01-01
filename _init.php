<?php

use App\App;
use App\Database\DBconnection;
use App\Database\QueryBuilder;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// require 'app/app.php';  // this file return an array
// require 'app/database/dbconnection.php';
// require 'app/database/querybuilder.php';
// require 'app/helpers.php';
// // use these in index.php
// require 'app/core/router.php';
// require 'app/core/request.php';
// require 'app/controllers/TaskController.php';

// all these is replaced with composer autoload i used "classmappp" with "app" directory i can use "./" for all the project but i dont need to
// and i used "files" with path "app/helpers.php" to use functtions in it
// THEN YOU MUST RUN  composer dump-autoload when adding new classes
require 'vendor/autoload.php'; // should be required contains autoload_classmap.php  and autoload_files.php files


App::set('config', require 'config.php');

$log = new Logger('PHP_BASICS');
$log->pushHandler(new StreamHandler('queries.log', Logger::INFO));

QueryBuilder::make(
    // array from the config.php file with index 'database'
    DBconnection::connect(App::get('config')['database']),
    $log
);
