## PHP Control Structure ##

**```if```**

```if``` expression is evaluated to its boolean value. If expression evaluates to ```true```, PHP will execute statement and if it evaluates to ```false``` it'll ignore it.

**```else```**

The ```else``` statement is only executed if the ```if``` expression evaluated ```false```.

**In case of nested if-else statements, an ```else``` is always associated with the nearest ```if```.**

**```elseif```**

The ```elseif``` statement is only executed if the preceding ```if``` expression and any preceding ```elseif``` expressions evaluated to ```false```, and the current ```elseif``` expression evaluated to ```true```.

**Difference between ```do-while``` vs ```while```**

|   ```do-while```                            |       ```while```                                           |
|---------------------------------------|-------------------------------------------------------|
|In a do--while loop, the test condition evaluation is at the end of the loop.  This means that the code inside of the loop will iterate once through before the condition is ever evaluated.  This is ideal for tasks that need to execute once before a test is made to continue, such as test that is dependant upon the results of the loop. | Conversely, a plain while loop evaluates the test condition at the begining of the loop before any execution in the loop block is ever made. If for some reason your test condition evaluates to false at the very start of the loop, none of the code inside your loop will be executed.

**Difference between ```break``` and ```continue```**

|       ```break```                               |               ```continue```                                |
|-------------------------------------------|-------------------------------------------------------|
|break ends execution of the current for, foreach, while, do-while or switch structure.| continue is used within looping structures to skip the rest of the current loop iteration and continue execution at the condition evaluation and then the beginning of the next iteration.|
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

**```switch```**

The ```switch``` statement executes **line by line (actually, statement by statement).** In the beginning, no code is executed. Only when a ```case``` statement is found whose expression evaluates to a value that matches the value of the ```switch``` expression does PHP begin to execute the statements. PHP continues to execute the statements until the end of the switch block, or the first time it sees a break statement. If you don't write a break statement at the end of a case's statement list, PHP will go on executing the statements.

**```match```**

The ```match``` expression branches evaluation based on an identity check of a value. Similarly to a ```switch``` statement, a ```match``` expression has a subject expression that is compared against multiple alternatives. Unlike s```witch```, it will evaluate to a value much like ternary expressions. Unlike ```switch```, the comparison is an identity check (===) rather than a weak equality check (==).

```
$food = 'cake';

$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
};

var_dump($return_value);
```

**The ```match``` expression is similar to a ```switch``` statement but has some key differences:**
* A ```match``` arm compares values strictly (===) instead of loosely as the ```switch``` statement does.
* A ```match``` expression returns a value.
* ```match``` arms do not fall-through to later cases the way ```switch``` statements do.
* A ```match``` expression must be exhaustive.

**declare**


The ```declare``` construct is used to set execution directives for a block of code.