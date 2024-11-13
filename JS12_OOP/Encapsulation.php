<?php

class Car {
    private $model;
    private $color;

    public function __construct(string $model, string $color) {
        $this->model = $model;
        $this->color = $color;
    }
    public function getModel(){
        return $this->model;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function getColor(){
        return $this->color;
    }
}

$Car =  new Car("Toyota", "Blue");

echo "Model: " .  $Car->getModel() . "<br>";
echo "Color: " .  $Car->getColor() . "<br>";
$Car->setColor("Red");

echo  "Update Color: " . $Car->getColor() . "<br>";

?>
