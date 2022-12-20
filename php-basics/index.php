<?php

class Vehicle
{
    private $modle;
    private $year;

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
        echo "{$this->modle} engine started!";
    }
}

$v1 =  new Vehicle("BMW", 's');
echo $v1->setmodel('toyota');
echo $v1->getmodel();
echo $v1->setyear(2023);
echo '<hr>';
$v1->start();
