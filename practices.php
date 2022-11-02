<?php
require './Helper/helper.php';

$array = [1,2,4,5,6,10,11];

$even = array_filter($array, fn ($number) => $number % 2 === 0 );

prettyPrintArray($even);
?>
