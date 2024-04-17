**List of questions that i ever face for PHP as backend developer.**

| #  |                                                           Questions                                                            |
| ----- | :-------------------------------------------------------------------------------------------------------------------------: |
| Basic    | [HTTP status code](#q001)<br>[Difference between 401 vs 403](#q002)<br>
| PHP    | [Some general rules for casting to Boolean are that:](#q15)<br>[Difference between put and patch Request](#q2)<br>[Difference between print and echo](#q3)<br>[What's the difference between ```unset()``` and ```unlink()```](#q13)<br>[What is the difference between errors and exceptions](#q14)<br>[What are the difference match expression vs switch case](#q4)<br>[PHP data type](#q5)<br>[What is Variable Variables](#q6)[What is require / require_once / include / include_once](#q7)<br>[PHP string quotation differences](#q8)<br>[PHP Global Variables - Superglobals](#q9)<br>[Difference between break and continue](#q10)<br>[PHP array_key_exists() vs isset()](#q11)<br>[Difference between array_shift() vs array_pop()](#q12)
| OOP(PHP)    | [Difference between abstract class and interface](#q200)<br>[What is encapsulation](#q201)<br>[What is the difference between encapsulation and abstraction](#q202)<br>[What is namespaces](#q203)<br>[What is the difference between  $this  and  self ?](#q204)
| Laravel    | [Request Lifecycle](#q300)<br>[Service Container](#q301)<br>[Service Providers](#q302)<br>[Facades](#q303)<br>[Facades vs. Dependency Injection](#q304)


## Q001

**There is a list of HTTP status code:**
  * **1xx informational response**
  * **2xx success(Most common)**
    * 200(success)
    * 201(create)
    * 202(Accepted)
  * **3xx redirection**
  * **4xx client errors(Most common)**
    * 401 (Unauthorized)
    * 403 (Forbidden)
    * 404 (Not Found)
  * **5xx server errors**
  
## Q002
**Difference between 401 vs 403**
|#  401                                            |# 403                            |
|--------------------------------------------------|---------------------------------|
|```401 Unauthorized:``` This status code indicates that the client trying to access the resource needs to authenticate itself to get access. In other words, the server is saying that the request lacks valid authentication credentials for the target resource. This means that the user needs to provide a valid username and password or other valid authentication token to access the resource.|```403 Forbidden:``` This status code indicates that the client is authenticated, but does not have sufficient permissions to access the resource. In other words, the server is saying that the client has been authenticated, but is not allowed to access the resource. This might be because the client doesn't have the correct permissions or the resource is forbidden to all users.

## Q2

**Difference between put and patch Request**
 * Put request can be use in order update an existing resource or put request can use create a resource which is call upsert.
 * Whenever we send put request we have to send whole the body resources in the request payload.
 * patch request basically just change few attributes existing resource

## Q3

**Difference between print and echo**
 * **Echo** has no return value, echo can take multiple parameters and echo is marginally faster than print.
 * **Print** has return value of 1 so it ca be used in expressions.

## Q4

**What are the difference match expression vs switch case**
 * Match is an expression, while switch is statement.
 * Match uses strict comparison, while switch uses loose.
 * Match allows only single-line expression, while switch allows block of statements.
 * If we don't set default in match it will throw error "Uncaught UnhandledMatchError".

## Q5

**PHP has eight primitive data types and those,**
 * booleans
 * integer
 * float
 * string
 * array
 * object
 * resource
 * null

## Q6
**What is Variable Variables?**

A variable variable takes the value of a variable and treats that as the name of a variable.
```
$Hello = "Welcome to my page";
$var = "Hello";
echo $var ." ". $$var;
```
The output will be
```
Hello Welcome to my page
```

## Q7
**What is require / require_once / include / include_once?**
 * include don't stop to the execution while file not found.
 * require stop the execution while file not found.
 * require_once or include_once same concept required or include file once count.
 
## Q8
**PHP string quotation differences.**

In PHP, both single and double quotation marks are used to enclose string values. However, there is a difference between the two in terms of how variables and escape sequences are interpreted:
* Single quotation marks (' '): When a string is enclosed in single quotation marks, variables are not parsed and escape sequences are not interpreted. For example, the string 'Hello, $name!' will be printed as-is, including the literal '$name' instead of its value.
* Double quotation marks (" "): When a string is enclosed in double quotation marks, variables are parsed and their values are inserted into the string. Escape sequences such as "\n" (newline) and "\t" (tab) are also interpreted. For example, the string "Hello, $name!" will print the value of the $name variable instead of the literal string '$name'.

Here's an example that demonstrates the difference:
```
$name = 'John';
echo 'Hello, $name!';  // output: Hello, $name!
echo "Hello, $name!";  // output: Hello, John!

```
In general, you should use single quotation marks for strings that do not contain variables or escape sequences, as they are slightly faster and easier to read. For strings that do contain variables or escape sequences, use double quotation marks.

## Q9
Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
 * $GLOBALS
 * $_SERVER
 * $_REQUEST
 * $_POST
 * $_GET
 * $_FILE
 * $_ENV
 * $_SESSION
 * $_COOKIE
 
## Q10
**Difference between break and continue**

|#                  Break                                      | #                          Continue                                                   |    
|--------------------------------------------------------------|---------------------------------------------------------------------------------------|
| The break statement terminates the whole iteration of a loop | While continue skips the current iteration.                                           |
```
<?php
for ($i = 1; $i < 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo $i . " ";
}
?>
```

```
Output: 1 3 5 7 9
```

```
<?php
for ($i = 1; $i < 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . " ";
}
?>
```
```
Output: 1 2 3 4
```
## Q11
**PHP array_key_exists() vs isset()**
* PHP isset() does not return true for array keys that correspond to a null value, while array_key_exists() does.

## Q12
**Difference between array_shift() vs array_pop()**

|#       array_shift()                               | #           array_pop()                                                           |
|----------------------------------------------------|-----------------------------------------------------------------------------------|
|```array_shift()``` removes the first element of an array and returns it.| while ```array_pop()``` removes the last element of an array and returns it.|

## Q13
**What's the difference between ```unset()``` and ```unlink()```**
* ```uset()``` is used for destroying a variable(s), while ```unlink``` is used for deleting a file from the file system.

## Q14
**What is the difference between errors and exceptions**
* An exception can be thrown and is intended to be caught using a try-catch block. A PHP error on the other hand is non recoverable and can stop the whole execution of the program.

## Q15
 * Empty arrays and strings are cast to ```false```.
 * Strings always evaluate to Boolean ```true``` unless they have a value that's considered "empty" by PHP.
 * Any integer or float that is non-zero is ```true```, so the negative numbers are ```true```
 
 
## Q200
**Difference between abstract class and interface**

|#    Abstract                                        | #           Interface                                                             |
|-----------------------------------------------------|-----------------------------------------------------------------------------------|
|Abstract class can contain method implementations    | Interface can only contain method declaration                                     |
|Abstract class can contain properties                | Interface can only contain methods and constants                                  |
|Abstract class can have private and protected methods| Interface can only have public methods                                            |
|Class can only extend single class                   | Class can implements multiple interfaces                                          |

## Q201
**What is encapsulation**
 * hiding the data and implementation details within a class
 
 ## Q202
 **What is the difference between encapsulation and abstraction**
  * **Eencapsulation** hiding internal state of information.
  * **Aabstraction** hide acctual implementation of the work.
  
  ## Q203
  **What is namespaces**
   * **Namespace** is one kind of virtual directory of the classes
  
  ## Q204
  **What is the difference between  $this  and  self ?**
  |#    $this                                                     |#  self                        |
  |---------------------------------------------------------------|-------------------------------|
  |Inside a class definition, $this refers to the current object.  | while  self  refers to the current class.|
## Q300
**Request Lifecycle**
* **Entry Point** The request enters the application through the public/index.php file, which serves as the entry point for all requests. Here, Laravel's bootstrap process begins.
* **Bootstrapping** The bootstrap/app.php file is loaded, which sets up the Laravel application, initializes the service container, and registers important bindings.
* **Kernel Handling** Laravel's HTTP kernel (app/Http/Kernel.php) receives the request. The kernel acts as a central entry point and manages HTTP requests coming into the application. It delegates the request to the appropriate middleware stack based on the request type (HTTP or Console).
* **Middleware Processing** Middleware are layers of logic that sit between the request and the application's core logic. Each middleware can intercept the request, perform tasks, and optionally terminate the request or pass it to the next middleware in the stack. Middleware can handle tasks such as authentication, session management, logging, etc.
* **Routing** After passing through middleware, the request reaches the router (Illuminate\Routing\Router), which determines which controller and method should handle the request based on the URL and HTTP verb. The router matches the incoming request to the routes defined in the routes/web.php or routes/api.php files.
* **Dispatching** Once the router determines the appropriate route, it dispatches the request to the corresponding controller or closure.
* **Controller Handling** The controller receives the request and processes it by executing the specified method. Controllers are responsible for handling the request logic, interacting with models, and returning responses.
* **Response** After the controller method has executed, it typically returns a response. The response may be generated directly within the controller or may be returned as a view, JSON, file download, redirect, etc.
* **Middleware Termination** After the controller has returned a response, the middleware stack continues execution in reverse order, allowing each middleware to perform post-processing tasks.
* **Termination** The HTTP kernel sends the generated response back to the client, completing the request-response cycle. If configured, Laravel may also send events or log information related to the request lifecycle.

## Q301
**Service Container**
The Laravel service container provides a flexible and powerful way to manage class dependencies and perform dependency injection, making your application more modular, testable, and maintainable. It's a fundamental component of the Laravel framework and is used extensively throughout the framework's architecture.

## Q303
**Facades**
Facades provide a static interface to classes that are registered in the service container. Laravel comes with several built-in facades that allow you to access services such as the database, session, cache, and more. Facades provide a clean and expressive way to interact with these services without needing to manually resolve them from the container
