<?php

class Animal {
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function eat(){
        echo $this-> name . " is eating. <br>";
    }
    public function sleep(){
        echo $this-> name . " is sleeping. <br>";
    }
}

class Cat extends Animal
{
    public function meow(){
        echo $this->name . " Say meowing. <br>";
    }
}

class Dog extends Animal{
    public function bark(){
        echo $this->name . " Say Woof!. <br>";
    }
}

$Cat = new Cat("Whiskers");
$dog = new Dog("Buddy");

$Cat->eat();
$dog->sleep();

$Cat->meow();
$dog->bark();

?>
