## Abstract ##
An **abstract** class in PHP is a class that cannot be instantiated(can't create object) on its own , but can only be used as a base class for other classes. An abstract class can contain both abstract and non-abstract methods, and can provide a common set of methods and properties that subclasses can use.

Here's an example of an abstract class in PHP:
```
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

```
In this example, ```Animal``` is an abstract class that defines a ```speak()``` method and an abstract ```move()``` method. The ```speak()``` method is implemented in the Animal class and can be used by all subclasses. The ```move()``` method is declared as abstract and does not have an implementation in the ```Animal``` class, but it is required to be implemented by any subclass that extends Animal.

The ```Dog``` and ```Cat``` classes extend the ```Animal``` class and provide their own implementation of the ```move()``` method. They can also use the ```speak()```method from the ```Animal``` class.

When we create new objects of the ```Dog``` and ```Cat``` classes, we can call both the ```speak()``` and ```move()``` methods, and they will output different results depending on the implementation in each subclass.