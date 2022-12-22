<?php

require 'database/dbconnection.php';
require 'database/querybuilder.php';

QueryBuilder::make(
    DBconnection::connect()
);
