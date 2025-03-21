<?php
class Car {
    private $speed = 0;

    public function accelerate($increment) {
        $this->speed += $increment;
    }

    public function getSpeed() {
        return $this->speed;
    }
}

$myCar = new Car();
$myCar->accelerate(50);
echo $myCar->getSpeed(); // Output: 50
//echo $myCar->speed;