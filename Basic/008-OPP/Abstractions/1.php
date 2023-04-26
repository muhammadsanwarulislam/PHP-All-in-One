<?php

abstract class Shape {
    abstract public function getArea();
  }
  
  class Circle extends Shape {
    private $radius;
  
    public function __construct($radius) {
      $this->radius = $radius;
    }
  
    public function getArea() {
      return pi() * pow($this->radius, 2);
    }
  }
  
  class Square extends Shape {
    private $side;
  
    public function __construct($side) {
      $this->side = $side;
    }
  
    public function getArea() {
      return pow($this->side, 2);
    }
  }
  
  // Create a new Circle object
  $circle = new Circle(5);
  echo "Circle area: " . $circle->getArea() . "\n"; // Output: Circle area: 78.539816339745
  
  // Create a new Square object
  $square = new Square(10);
  echo "Square area: " . $square->getArea() . "\n"; // Output: Square area: 100