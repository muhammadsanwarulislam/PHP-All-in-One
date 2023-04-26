## Clear concept of variable declaration rules and classification ##

## What is variables ##
Variables in PHP are represented by a dollar sign followed by the name of the variable. The variable name is case-sensitive.

By default, variables are always assigned by value. That is to say, when you assign an expression to a variable,the entire value of the original expression is copied into the destination variable.This means, for instance, that after assigning one variable's value to another, changing one of those variables will have no effect on the other.

PHP also offers another way to assign values to variables: assign by reference.This means that the new variable simply references (in other words, "becomes an alias for" or "points to") the original variable.

**Variable declaration rules:**

* start with dollar sign($)
* first letter of variable name comes from a-zA-z_
* next letters of variable name comes from a-zA-Z0-9_
* no space,no syntex

**Classification of variables:**

Variable are mainly Two types
* Predefined Variable
* User Define Variable

**Predefined Variable**
There are 12 predefined variables in php 8
* $GLOBALS
* $_SERVER
* $_REQUEST
* $_FILES
* $_ENV
* $_SESSION
* $_COOKIE
* $_GET
* $_POST
* $http_response_header
* $argc
* $argv

**User Define Variable**
User Define variable are 3 types
1.variable scope
2.variable variables
3.reference variable

**Variable Scope**
variable scope are 3 types
1.local scope
2.global scope
3.static variable


