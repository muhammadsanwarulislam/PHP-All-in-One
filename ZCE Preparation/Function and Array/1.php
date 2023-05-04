<?php

$array1 = array('orange','apple','raspberry');
$array2 = array(0 => "pineapple", 4 => "cherry");
$array3 = array(0 => "grape");
$array4 = array_replace($array1,$array2,$array3);
print_r($array4);