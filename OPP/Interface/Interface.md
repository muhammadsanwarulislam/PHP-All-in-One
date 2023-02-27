## Interface  ##
In PHP, an interface is a contract between the implementing class and the outside world. It specifies a set of methods that the implementing class must define. 
Here are the rules for defining an interface in PHP:

* **Interface keyword:** The interface keyword is used to define an interface.
* **Method definition:** An interface can only define method signatures (i.e., the function name, parameters, and return type), but not their implementation.
* **Public access:** All methods in an interface must be defined as public.
* **No variables:** An interface cannot contain any variables excepted constants but can't overwrite.
* **No implementation:** An interface cannot provide any implementation for its methods.
* **Implementation required:** Any class that implements an interface must provide an implementation for all of the interface's methods.
* **Multiple inheritance:** A class can implement multiple interfaces, allowing it to conform to multiple contracts.

## why interfaces are useful in PHP ##
* **Abstraction:** By using interfaces, you can define a contract between different parts of your code, allowing you to work with objects at a higher level of abstraction. This can make your code more modular and easier to maintain.
* **Loose coupling:** Interfaces can help you decouple different parts of your code, making it easier to change one part without affecting the others. This can make your code more resilient to change.
* **Standardization:** Interfaces can be used to standardize the way different parts of your code interact with each other. This can help ensure that your code is consistent and easy to understand.

```
<?php
interface Shape {
    public function area();
    public function perimeter();
}

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }

    public function perimeter() {
        return 2 * ($this->width + $this->height);
    }
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }

    public function perimeter() {
        return 2 * pi() * $this->radius;
    }
}

$rectangle = new Rectangle(5, 10);
echo "Rectangle area: " . $rectangle->area() . "\n";      // Output: Rectangle area: 50
echo "Rectangle perimeter: " . $rectangle->perimeter() . "\n";  // Output: Rectangle perimeter: 30

$circle = new Circle(5);
echo "Circle area: " . $circle->area() . "\n";      // Output: Circle area: 78.539816339745
echo "Circle perimeter: " . $circle->perimeter() . "\n";  // Output: Circle perimeter: 31.415926535899
?>

```
