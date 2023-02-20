## Encapsulation ##
**Encapsulation** is a concept in object-oriented programming where data and methods are bundled together within a class to prevent direct access to the class's internal state. This is achieved by declaring the class's data members as private or protected, and providing public methods to access and modify them.

Here's an example of abstraction in PHP:
```
class Transcation {
    private int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function processing()
    {
        echo 'The transcation '. $this->amount . ' is processing';
    }
}

$objOfTranscation = new Transcation(30);
$objOfTranscation->processing(); 
```
In this example, we have a ```Transcation``` class with ```$amount``` property which is private and we have two methods ```__construct``` and ```processing```. The ```__construct``` set the amount whatever we pass the amount when we create a object the ```Transcation```class and ```processing``` method just echo the amount. In this example we can change ```Transcation``` internal state outside of the class but if we define ```$amount``` property as like ```public int $amount``` then we can modify the ```Transcation``` class state. We can modify the state like this 
``` 
$objOfTranscation = new Transcation(30);
$objOfTranscation->amount = 100;
$objOfTranscation->processing(); 
````
Output will be:
```
The transcation 100 is processing
```
