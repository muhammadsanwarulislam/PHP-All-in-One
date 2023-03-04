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
$new_animals = ['cat','cow'];
$str_replace = str_replace($animals, $new_animals, $message);
echo "The main message is: $message".PHP_EOL;
print_r($str_replace).PHP_EOL;

//trim()
$str = "   Hello World!   ";
$trimmed = trim($str);
echo $trimmed.PHP_EOL; 

//explode()
$str = "apple,banana,orange";
$fruits = explode(",", $str);
print_r($fruits).PHP_EOL; 

//Leetcode Problem
function groupAnagrams($strs) {  
    $res=[];
    foreach($strs as $str){
        $strArray=str_split($str);
        sort($strArray);
        $temp=implode(' ',$strArray).'';
        /*
        The $res array is an associative array where the keys are the sorted strings 
        of characters and the values are arrays of strings that are anagrams of each 
        other. The [] notation after $res[$temp] means that a new element is appended 
        to the end of the existing array for the corresponding key.
        */
        $res[$temp][]=$str;
    }
    return $res;
}
print_r(groupAnagrams(["eat","tea","tan","ate","nat","bat"]));//[["eat","tea","ate"],["tan","nat"],["bat"]]
