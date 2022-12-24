<?php
require '_init.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');
$uri = str_replace('hsoub-php-internship/php-basics', '', $uri);
$uri = trim($uri, '/');

Router::make([
    '' => 'app/controllers/index.php',
    'about' => 'app/controllers/about.php',
])->resolve($uri);
