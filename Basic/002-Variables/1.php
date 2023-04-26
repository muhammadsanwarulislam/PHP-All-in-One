<?php
/**
 * Variables in PHP are represented by a dollar sign followed by the name of the variable. The variable name is case-sensitive.
 */

 $var = 'Muhammad';
 $Var = 'Islam';
 echo $var.PHP_EOL, $Var.PHP_EOL;

 /**
  * By default, variables are always assigned by value. That is to say, when you assign an expression to a variable, 
  * the entire value of the original expression is copied into the destination variable. 
  * This means, for instance, that after assigning one variable's value to another, 
  * changing one of those variables will have no effect on the other.
  *
  * PHP also offers another way to assign values to variables: assign by reference. 
  * This means that the new variable simply references (in other words, "becomes an alias for" or "points to") the original variable. 
  * Changes to the new variable affect the original, and vice versa.
  */

  $foo = 'Jonn';
  $bar = &$foo;
  $bar = "My name is $bar";
  echo $bar.PHP_EOL;
  echo $foo.PHP_EOL;

  /**
   * Static vaiables
   */

   function sum() {
    static $a = 0;
    echo $a.PHP_EOL;
    $a++;
   }
   sum();
   sum();
   sum();

   /**
    * Global
    */

