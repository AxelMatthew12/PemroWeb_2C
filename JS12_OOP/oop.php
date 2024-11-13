<?php

class Car {
    public $brand;

    public function startEngine(){
        echo "Engine started!";
    }
}

$car1 =  new Car();
$car1->brand = "Toyota";

$Car2 = new Car();
$Car2 ->brand = "Honda";

$Car2->startEngine();
echo $Car2->brand;
?>