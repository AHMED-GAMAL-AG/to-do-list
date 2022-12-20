<?php


abstract class Shape // cant create object of it
{
    abstract function area();
}

class Square extends Shape
{
    private $Length;

    public function __construct($l)
    {
        $this->Length = $l;
    }

    public function area()
    {
        echo $this->Length * $this->Length; echo '<hr>';
    }
}

class Circle extends Shape
{
    private $radias;

    public function __construct($r)
    {
        $this->radias = $r;
    }

    public function area()
    {
        echo pi() * ($this->radias * $this->radias); echo '<hr>';
    }
}

$s = new Square(2);
$s->area();

$c = new Circle(2);
$c->area(2);
