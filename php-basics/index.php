<?php

class Example
{

    public $test;

    public function __construct($t)
    {
        $this->test = $t;
        echo "hello there i am the constructor <hr> ";
    }
    public function __destruct()
    {
        echo "destroying method :( <hr> ";
    }

    public function __call($name, $arguments) // called when trying to acces Undefined method
    {
        echo "Undefined method {$name} <hr>";
    }

    public function __get($name) // called when trying to acces Undefined property
    {
        echo "unkown property {$name}  <hr>";
    }
}

$e = new Example('test');
$e->hello(); // Undefined method
echo $e->test;
echo '<hr>';
