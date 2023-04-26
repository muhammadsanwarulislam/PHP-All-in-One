## Magic Methods ##
Here are some commonly used magic methods in PHP:
* **__construct()**: This is called when an object is created and can be used to set up initial properties or perform any other initialization tasks.
* **__get($property)**: This is called when an undefined or private property of an object is accessed. It can be used to dynamically retrieve the value of a property, or to trigger an error if the property does not exist.
* **__set($property, $value)**: This is called when a value is assigned to an undefined or private property of an object. It can be used to validate the value before it is set, or to trigger an error if the property does not exist.
* **__toString()**: This is called when an object is used in a string context, such as when it is passed to the echo function. It should return a string representation of the object.
* **__call($name, $arguments)**: This is called when an undefined method of an object is called. It can be used to implement a catch-all method that can handle any method call, or to trigger an error if the method does not exist.
* **__callStatic($name, $arguments)**: This is similar to __call(), but is called when an undefined static method of a class is called.
* **__isset($property)**: This is called when the isset() function is used to check whether a property of an object is set. It should return a boolean value indicating whether the property is set.
* **__unset($property)**: This is called when the unset() function is used to unset a property of an object. It can be used to perform any cleanup tasks that are necessary when a property is unset.
* **__sleep()**: This is called when an object is serialized using the serialize() function. It can be used to specify which properties should be serialized.
* **__wakeup()**: This is called when an object is unserialized using the unserialize()
* **__invoke()**: ```__invoke()``` is a magic method in PHP that allows an object to be called as if it were a function. When an object is called as a function, PHP will automatically invoke the ```__invoke()``` method if it exists. The ```__invoke()``` method must be declared within a class and should have no parameters. It can have any visibility (public, protected, or private) and can return any type of value.
