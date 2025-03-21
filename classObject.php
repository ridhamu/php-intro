<?php

class Car
{
    public $color;
    public $model;
    public $speed;

    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
        $this->speed = 0;
    }

    public function accelerate($increment)
    {
        $this->speed += $increment;
    }

    public function brake($decrement)
    {
        $this->speed -= $decrement;
        if ($this->speed < 0) {
            $this->speed = 0;
        }
    }

    public function getSpeed()
    {
        return $this->speed;
    }
}

$myCar = new Car("red", "Toyota");
$anotherCar = new Car("blue", "Honda");

echo $myCar->color;
$myCar->accelerate(20);
echo $myCar->getSpeed();
$myCar->brake(10);
echo $myCar->getSpeed();
echo $anotherCar->color;
