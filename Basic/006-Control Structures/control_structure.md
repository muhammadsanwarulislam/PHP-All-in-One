## PHP Control Structure ##

**Difference between do-while vs while**

|   do-while                            |       while                                           |
|---------------------------------------|-------------------------------------------------------|
|In a do--while loop, the test condition evaluation is at the end of the loop.  This means that the code inside of the loop will iterate once through before the condition is ever evaluated.  This is ideal for tasks that need to execute once before a test is made to continue, such as test that is dependant upon the results of the loop. | Conversely, a plain while loop evaluates the test condition at the begining of the loop before any execution in the loop block is ever made. If for some reason your test condition evaluates to false at the very start of the loop, none of the code inside your loop will be executed.