<?php

use App\App;
use App\Database\DBconnection;
use App\Database\QueryBuilder;

require 'app/app.php';  // this file return an array
require 'app/database/dbconnection.php';
require 'app/database/querybuilder.php';
require 'app/helpers.php';

// use these in index.php
require 'app/core/router.php';
require 'app/core/request.php';
require 'app/controllers/TaskController.php';

App::set('config', require 'config.php');

QueryBuilder::make(
    DBconnection::connect(App::get('config')['database']) // array from the config.php file with index 'database'
);
