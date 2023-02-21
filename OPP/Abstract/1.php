<?php

abstract class Animal {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function speak() {
        echo $this->name . " makes a sound.";
    }
    
    abstract public function move();
}

class Dog extends Animal {
    public function move() {
        echo $this->name . " runs.";
    }
}

class Cat extends Animal {
    public function move() {
        echo $this->name . " walks.";
    }
}

$dog = new Dog("Fido");
$dog->speak(); // Output: Fido makes a sound.
$dog->move(); // Output: Fido runs.

$cat = new Cat("Fluffy");
$cat->speak(); // Output: Fluffy makes a sound.
$cat->move(); // Output: Fluffy walks.
