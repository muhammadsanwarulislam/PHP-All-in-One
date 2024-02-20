## Abstraction ##
**Abstraction** is a concept in object-oriented programming that allows us to define a class or interface in a way that hides its implementation details, while providing a clear and concise interface to its functionality.

In PHP, we can create abstract classes and methods that define the interface of a class, without implementing the details of its functionality. Here's an example of abstraction in PHP:
```
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

```
In this example, we have an abstract class ```Shape``` with an abstract method ```getArea``` that defines the interface for calculating the area of a shape. We also have two concrete classes ```Circle``` and ```Square``` that extend ```Shape``` and implement the ```getArea ```method according to their own logic.

By using abstraction, we can define a clear and concise interface for calculating the area of a shape, without exposing the implementation details of each shape. This allows us to create new shapes that implement the ```Shape``` interface, without having to change any existing code.

We create instances of both ```Circle``` and ```Square``` classes and call their ```getArea``` methods to display their areas. This demonstrates how abstraction allows us to define a clear and concise interface to the functionality of a class, without exposing its implementation details.