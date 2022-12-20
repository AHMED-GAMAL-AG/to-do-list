<?php


trait MyTrait
{
    public function hello()
    {
        echo "hello there!"; echo '<hr>';
    }
}

class Example{
    use MyTrait;
}

$e= new Example();

$e->hello();