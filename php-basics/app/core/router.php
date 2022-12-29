<?php

class Router
{
    private $get = [];
    private $post = [];

    public static function make()  // return an array carying the rout paths
    {
        $router = new self;
        return $router;
    }

    public function get($uri, $action)
    {
        $this->get[$uri] = $action; // [ '', [TaskController::class, 'index'] ]
        return $this;
    }

    public function post($uri, $action)
    {
        $this->post[$uri] = $action;
        return $this;
    }

    public function resolve($uri, $method) // check if the uri is valid 
    {
        if (array_key_exists($uri, $this->$method)) {
            $action = $this->{$method}[$uri];

            $this->callaction(...$action); // pass the action array as variables [TaskController::class , 'index']
        } else {
            throw new Exception('Page Not Found!');
        }
    }

    public static function callaction($controller, $action) // [TaskController::class , 'index'] get these two parametars 
    {
        // [TaskController::class , 'index']
        $controller = new $controller; // first index create controller object equals to $controller = new TaskController
        $controller->{$action}(); // equals to $controller->index();
    }
}
