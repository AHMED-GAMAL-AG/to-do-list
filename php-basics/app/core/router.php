<?php

class Router
{
    private $routes = [];

    public static function make($r)
    {
        $router = new self;
        $router->routes = $r;
        return $router;
    }

    public function resolve($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            require  $this->routes[$uri];
        } else {
            throw new Exception('Page Not Found!');
        }
    }
}
