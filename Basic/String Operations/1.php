<?php

//strlen()
$message = 'Hello';
$length = strlen($message);
echo "Length of the $message".' is :'.$length.PHP_EOL;

//str_split()
$string = "Hello World!";
$chars = str_split($string);
echo "Spilt of the $string".PHP_EOL;
print_r($chars);

//implode()
$fruits = array("Apple", "Banana", "Orange", "Mango");
$fruits_string = implode(", ", $fruits);
echo "Implode of the array: ". $fruits_string.PHP_EOL;

//strpos()
$string = "Hello World!";
$pos = strpos($string, "World");
echo "String position of the $string is: ". $pos.PHP_EOL;

//str_replace()
$message = 'The quick brown fox jumps over the lazy dog';
$animals = ['fox', 'dog'];
$newAnimals = ['cat','cow'];
$strReplace = str_replace($animals, $newAnimals, $message);
echo "The main message is: $message".PHP_EOL;
print_r($strReplace).PHP_EOL;

//trim()
$str = "   Hello World!   ";
$trimmed = trim($str);
echo $trimmed.PHP_EOL; 

//explode()
$str = "apple,banana,orange";
$fruits = explode(",", $str);
print_r($fruits).PHP_EOL; 
