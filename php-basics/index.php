<?php
require '_init.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');
$uri = str_replace('hsoub-php-internship/php-basics', '', $uri);
$uri = trim($uri, '/');

echo $uri . '<hr>';

switch ($uri) {

    case '':
        require 'pages/index.php';
        break;
    case 'about':
        require 'pages/about.php';
        break;
    default:
        throw new Exception('Page Not Found!');
}
