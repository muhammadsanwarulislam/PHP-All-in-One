## PHP Control Structure ##

**if**

```if``` expression is evaluated to its boolean value. If expression evaluates to ```true```, PHP will execute statement and if it evaluates to ```false``` it'll ignore it.

**else**

The ```else``` statement is only executed if the ```if``` expression evaluated ```false```.

**In case of nested if-else statements, an ```else``` is always associated with the nearest ```if```.**

**elseif**

The ```elseif``` statement is only executed if the preceding ```if``` expression and any preceding ```elseif``` expressions evaluated to ```false```, and the current ```elseif``` expression evaluated to ```true```.

**Difference between do-while vs while**

|   do-while                            |       while                                           |
|---------------------------------------|-------------------------------------------------------|
|In a do--while loop, the test condition evaluation is at the end of the loop.  This means that the code inside of the loop will iterate once through before the condition is ever evaluated.  This is ideal for tasks that need to execute once before a test is made to continue, such as test that is dependant upon the results of the loop. | Conversely, a plain while loop evaluates the test condition at the begining of the loop before any execution in the loop block is ever made. If for some reason your test condition evaluates to false at the very start of the loop, none of the code inside your loop will be executed.
