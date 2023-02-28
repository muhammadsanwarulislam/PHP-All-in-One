| #  |                                                           Questions                                                            |
| ----- | :-------------------------------------------------------------------------------------------------------------------------: |
| Step: 1    | [HTTP status code](#q1)
| Step: 2    | [Difference between put and patch Request](#q2)<br>[Difference between print and echo](#q3)<br>[What are the difference match expression vs switch case](#q4)<br>[PHP data type](#q5)<br>[What is Variable Variables](#q6)[What is require / require_once / include / include_once](#q7)<br>[PHP string quotation differences](#q8)<br>[PHP Global Variables - Superglobals](#q9)<br>[Difference between break and continue](#q10)<br>
| Step: 3    | [Difference between abstract class and interface](#q200)<br>[What is encapsulation](#q201)<br>[What is the difference between encapsulation and abstraction](#q202)<br>[What is namespaces](#q203)


## Q1

There is a list of HTTP status code:
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

## Q2

Difference between put and patch Request
 * Put request can be use in order update an existing resource or put request can use create a resource which is call upsert.
 * Whenever we send put request we have to send whole the body resources in the request payload.
 * patch request basically just change few attributes existing resource

## Q3

Difference between print and echo
 * **Echo** has no return value, echo can take multiple parameters and echo is marginally faster than print.
 * **Print** has return value of 1 so it ca be used in expressions.
 
## Q4

What are the difference match expression vs switch case
 * Match is an expression, while switch is statement.
 * Match uses strict comparison, while switch uses loose.
 * Match allows only single-line expression, while switch allows block of statements.
 * If we don't set default in match it will throw error "Uncaught UnhandledMatchError".

## Q5

PHP has eight primitive data types and those,
 * booleans
 * integer
 * float
 * string
 * array
 * object
 * resource
 * null

## Q6
What is Variable Variables?
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
What is require / require_once / include / include_once?
 * include don't stop to the execution while file not found.
 * require stop the execution while file not found.
 * require_once or include_once same concept required or include file once count.
 
## Q8
PHP string quotation differences.
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
Difference between break and continue

|#                  Break                                      | #                          Continue                                                   |    
|--------------------------------------------------------------|---------------------------------------------------------------------------------------|
| The break statement terminates the whole iteration of a loop | While continue skips the current iteration.                                           |
## Q200
Difference between abstract class and interface

|#    Abstract                                        | #           Interface                                                             |
|-----------------------------------------------------|-----------------------------------------------------------------------------------|
|Abstract class can contain method implementations    | Interface can only contain method declaration                                     |
|Abstract class can contain properties                | Interface can only contain methods and constants                                  |
|Abstract class can have private and protected methods| Interface can only have public methods                                            |
|Class can only extend single class                   | Class can implements multiple interfaces                                          |

## Q201
What is encapsulation
 * hiding the data and implementation details within a class
 
 ## Q202
 What is the difference between encapsulation and abstraction
  * **Eencapsulation** hiding internal state of information.
  * **Aabstraction** hide acctual implementation of the work.
  
  ## Q203
  What is namespaces
   * **Namespace** is one kind of virtual directory of the classes
