<?php

class Vehicle
{
    protected $modle; // protected to acces it from children
    protected $year;
    public static $constant = 'hey i am a constant value';

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
    public static function acces_constant()
    {
        echo self::$constant;
    }
}

$car = new Vehicle('BMW', 2023);
echo Vehicle::$constant;
echo '<hr>';
$car->acces_constant();
echo '<hr>';
Vehicle::acces_constant();