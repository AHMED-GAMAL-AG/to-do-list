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
        $this->get[$uri] = $action;
        return $this;
    }

    public function post($uri, $action)
    {
        $this->post[$uri] = $action;
        return $this;
    }

    public function resolve($uri ,$method) // check if the uri is valid 
    {
        if (array_key_exists($uri, $this->$method)) {
            require $this->$method[$uri];
        } else {
            throw new Exception('Page Not Found!');
        }
    }
}
