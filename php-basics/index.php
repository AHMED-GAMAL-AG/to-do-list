<?php
require '_init.php';

// $uri = trim($_SERVER['REQUEST_URI' ], '/'); // this get the pase and the passed data to the form
$uri = parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH); // get only the pass and ignores the data
$uri = str_replace('hsoub-php-internship/php-basics', '', $uri);
$uri = trim($uri, '/');

Router::make([
    '' => 'app/controllers/index.php',
    'about' => 'app/controllers/about.php',
    'task/create' => 'app/controllers/task.create.php',
])->resolve($uri);
