<?php

require 'app/database/dbconnection.php';
require 'app/database/querybuilder.php';

// use these in index.php
require 'app/core/router.php';
require 'app/core/request.php';

QueryBuilder::make(
    DBconnection::connect()
);
