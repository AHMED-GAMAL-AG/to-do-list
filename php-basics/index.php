<?php

interface ShapeInterface
{
    public function perimeter();
}

abstract class Shape // cant create object of it
{
    abstract function area();
}

class Square extends Shape implements ShapeInterface
{
    private $Length;

    public function __construct($l)
    {
        $this->Length = $l;
    }

    public function area()
    {
        echo $this->Length * $this->Length;
        echo '<hr>';
    }

    public function perimeter()
    {
        echo $this->Length * 4;
        echo '<hr>';
    }
}



$s = new Square(2);
$s->area();
$s->perimeter();
