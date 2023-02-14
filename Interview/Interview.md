| #  |                                                           Questions                                                            |
| ----- | :-------------------------------------------------------------------------------------------------------------------------: |
| Step: 1    | [HTTP status code](#q1)
| Step: 2    | [Difference between PUT and PATCH Request](#q2)


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
 * Put request can be use in order update an existing resource or put request can use create a resource which is call upsert.
 * Whenever we send put request we have to send whole the body resources in the request payload.
 * patch request basically just change few attributes existing resource
