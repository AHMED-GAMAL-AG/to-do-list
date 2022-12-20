<?php

class Vehicle
{
    protected $modle; // protected to acces it from children
    protected $year;

    public function __construct($m, $y)
    {
        $this->modle = $m;
        $this->year = $y;
    }
    public function setmodel($m)
    {
        $this->modle = $m;
    }

    public function getmodel()
    {
        return $this->modle;
    }

    public function setyear($y)
    {
        if (is_int($y)) {
            $this->year = $y;
        } else throw new Exception('please enter a degit');
    }

    public function getyear()
    {
        return $this->year;
    }

    public function start()
    {
        echo "{$this->modle} engine started!"; echo '<hr>';
    }
}

// is-a car is a vehicle
class Car extends Vehicle
{
    private $color;

    public function __construct($m , $y , $c)
    {
        parent::__construct($m , $y);
        $this->color = $c;
    }

    public function print_info()
    {
        echo "{$this->modle} / {$this->year}"; // i can acces them from parent class bec they are protected not private
    }   
}


$v = new Vehicle('airplain','1999');
$c = new Car('toyota','2023' , 'black');

$c->start();
$c->print_info();