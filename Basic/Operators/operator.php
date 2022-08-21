<?php

/*
    PHP Arithmetic Operators
    ------------------------------------------------------------------------------------------------------------------
    Operator              Name                    Example                     Result                                    
    +                   Addition                  $x + $y                     Sum of $x and $y
    -                   Subtraction               $x - $y                     Difference of $x and $y
    *                   Multiplication            $x * $y                     Product of $x and $y
    /                   Division                  $x / $y                     Quotient of $x and $y
    %                   Modulus                   $x % $y                     Remainder of $x divided by $y
    **                  Exponentiation            $x ** $y                    Result of raising $x to the $y'th power

    PHP Assignment Operators
    -------------------------------------------------------------------------------------------------------------------
    Assignment                          Same as                             Descripion
    x = y                               x = y                               The left operand gets set to the value of the expression on the right
    x += y                              x = x + y                           Addition
    x -= y                              x = x - y                           Subtraction
    x *= y                              x = x * y                           Multiplication
    x /= y                              x = x / y                           Division
    x %= y                              x = x % y                           Modulus

    PHP Comparison Operators
    ----------------------------------------------------------------------------------------------------------------------
    Operator                            Name                        Example                         Result
    ==                                  Equal                       $x == $y                        Returns true if $x is equal to $y
    ===                                 Identical                   $x === $y                       Returns true if $x is equal to $y, and they are of the same type
    !=                                  Not equal                   $x != $y                        Returns true if $x is not equal to $y
    <>                                  Not equal                   $x <> $y                        Returns true if $x is not equal to $y
    !==                                 Not identical               $x !== $y                       Returns true if $x is not equal to $y, or they are not of the same type
    <=>                                 Spaceship                   $x <=> $y                       Returns an integer less than, equal to, or greater than zero, 
                                                                                                    depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.

    PHP Increment / Decrement Operators
    -------------------------------------------------------------------------------------------------------------------------
    Operator                    Name                        Description
    ++$x                        Pre-increment               Increments $x by one, then returns $x
    $x++                        Post-increment              Returns $x, then increments $x by one
    --$x                        Pre-decrement               Decrements $x by one, then returns $x
    $x--                        Post-decrement              Returns $x, then decrements $x by one

    PHP Conditional Assignment Operators
    --------------------------------------------------------------------------------------------------------------------------
    Operator                    Name                  Example                       Result
    ?:                          Ternary               $x = expr1 ? expr2 : expr3    Returns the value of $x.
                                                                                    The value of $x is expr2 if expr1 = TRUE.
                                                                                    The value of $x is expr3 if expr1 = FALSE
    ??                          Null coalescing       $x = expr1 ?? expr2           Returns the value of $x.
                                                                                    The value of $x is expr1 if expr1 exists, and is not NULL.
                                                                                    If expr1 does not exist, or is NULL, the value of $x is expr2.
                                                                                    Introduced in PHP 7
*/