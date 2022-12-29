<?php

class Request
{
    public static function uri()
    {
        // $uri = trim($_SERVER['REQUEST_URI' ], '/'); // this get the pase and the passed data to the form
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // get only the pass and ignores the data
        $uri = str_replace('hsoub-php-internship/php-basics', '', $uri);
        return trim($uri, '/');
    }

    public static function get($key, $default = null) // use GET or POST array if it is a get or post request
    {
        return $_GET[$key] ?? $_POST[$key] ?? $default; // if get is empty return post if empty return default 
    }

    public static function method() // to know GET or POST is used
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
