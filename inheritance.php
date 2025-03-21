<?php

class Vehicle
{
    public $make;
    public $model;

    public function __construct($make, $model)
    {
        $this->make = $make;
        $this->model = $model;
    }

    public function start()
    {
        echo "Engine started.\n";
    }
}

class Car extends Vehicle
{
    public $doors;

    public function __construct($make, $model, $doors)
    {
        parent::__construct($make, $model);
        $this->doors = $doors;
    }

    public function start()
    {
        echo "Car started (Vroom!).\n";
    }
}

$myCar = new Car("Toyota", "Camry", 4);
$myCar->start();
echo $myCar->make;
