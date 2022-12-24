<?php

require 'app/database/dbconnection.php';
require 'app/database/querybuilder.php';
require 'app/core/router.php';

QueryBuilder::make(
    DBconnection::connect()
);
