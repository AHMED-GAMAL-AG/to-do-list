<?php

class Vehicle
{
    public $modle;
    public $year;

    public function __construct($m, $y)
    {
        $this->modle = $m;
        $this->year = $y;
    }

    public function start()
    {
        echo "{$this->modle} engine started!";
    }
}

$v1 =  new Vehicle("BMW" , 2023);

$v1->start();
