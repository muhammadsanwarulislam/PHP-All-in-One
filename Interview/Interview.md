| #  |                                                           Questions                                                            |
| ----- | :-------------------------------------------------------------------------------------------------------------------------: |
| Step: 1    | [HTTP status code](#q1)
| Step: 2    | [Difference between put and patch Request](#q2)<br>[Difference between print and echo](#q3)<br>[What are the difference match expression vs switch case](#q4)<br>[PHP data type](#q5)<br>[What is Variable Variables](#q6)[What is require / require_once / include / include_once](#q7)


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

## Q7
What is require / require_once / include / include_once?
 * include don't stop to the execution while file not found.
 * require stop the execution while file not found.
 * require_once or include_once same concept required or include file once count.
