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

/**
 * When converting to bool, the following values are considered false:
 */
var_dump((bool) "");        // bool(false)
var_dump((bool) "0");       // bool(false)
var_dump((bool) 0);         // bool(false)
var_dump((bool) -0);        // bool(false)
var_dump((bool) -1);        // bool(true)
var_dump((bool) array());   // bool(false)

/**
 * Complex Type Casting and Overwriting example of array
 */
$array = array(
    1    => 'a',
    '1'  => 'b', // the value "a" will be overwritten by "b"
    1.5  => 'c', // the value "b" will be overwritten by "c"
    -1   => 'd',
    '01'  => 'e', // as this is not an integer string it will NOT override the key for 1
    '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
    true => 'g', // the value "c" will be overwritten by "g"
    false => 'h',
    '' => 'i',
    null => 'j', // the value "i" will be overwritten by "j"
    'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
    2 => 'l', // the value "k" will be overwritten by "l"
);

var_dump($array);

/**
 * Array destructuring
 */
$source_array = ['foo', 'bar', 'baz'];

[$foo, $bar, $baz] = $source_array;

echo $foo;    // prints "foo"
echo $bar;    // prints "bar"
echo $baz;    // prints "baz"