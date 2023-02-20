## Constructor Property Promotion ##
Constructor property promotion is a new feature introduced in PHP 8.0 that allows you to declare class properties directly in the constructor signature. This feature simplifies the syntax of defining properties, especially when dealing with classes that require many properties.

Here's an example of how constructor property promotion works:

```
class User {
    public function __construct(
        public string $name,
        public string $email,
        public int $age = 0,
        private bool $isAdmin = false
    ) {}
}

```

In this example, we have defined a class called User with four properties. The first three properties, ```$name```, ```$email```, and ```$age```, are public, while the fourth property, ```$isAdmin```, is private. We have also specified a default value of false for the ```$isAdmin``` property.

By using constructor property promotion, we can declare these properties directly in the constructor signature. The public keyword before each property declaration makes them public, and the private keyword before the ```$isAdmin``` property declaration makes it private.

Constructor property promotion can help reduce boilerplate code, improve readability, and make your code more concise. However, it's worth noting that it's only available in PHP 8.0 and higher, so you'll need to make sure your server environment supports it.