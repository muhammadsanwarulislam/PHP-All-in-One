<?php
$a_bool = true;   // a bool
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an int
$a_float =5.8;     // a float

/**
 * Check Type
 */
var_dump(is_float($a_float));
var_dump(is_int($an_int));
var_dump(is_string($a_str));

/**
 * Casting
 */
var_dump((int)$a_float);
var_dump((float)$an_int);