## Interface  ##
In PHP, an interface is a contract between the implementing class and the outside world. It specifies a set of methods that the implementing class must define. 
Here are the rules for defining an interface in PHP:

* Interface keyword: The interface keyword is used to define an interface.
* Method definition: An interface can only define method signatures (i.e., the function name, parameters, and return type), but not their implementation.
* Public access: All methods in an interface must be defined as public.
* No variables: An interface cannot contain any variables excepted constants but can't overwrite.
* No implementation: An interface cannot provide any implementation for its methods.
* Implementation required: Any class that implements an interface must provide an implementation for all of the interface's methods.
* Multiple inheritance: A class can implement multiple interfaces, allowing it to conform to multiple contracts.