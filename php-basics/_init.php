<?php

use App\App;
use App\Database\DBconnection;
use App\Database\QueryBuilder;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require 'app/app.php';  // this file return an array
require 'app/database/dbconnection.php';
require 'app/database/querybuilder.php';
require 'app/helpers.php';

// use these in index.php
require 'app/core/router.php';
require 'app/core/request.php';
require 'app/controllers/TaskController.php';
require 'vendor/autoload.php';


App::set('config', require 'config.php');

$log = new Logger('PHP_BASICS');
$log->pushHandler(new StreamHandler('queries.log' , Logger::INFO));

QueryBuilder::make(
    // array from the config.php file with index 'database'
    DBconnection::connect(App::get('config')['database']) , $log
);
