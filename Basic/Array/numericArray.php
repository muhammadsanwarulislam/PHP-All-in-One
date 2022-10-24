<?php

//Numeric Array

/* 
    A numeric array does not mean it only holds numeric data. In fact, it means
    the indexes will be numbers only. In PHP they can either be sequential or
    non-sequential but they have to be numeric.
*/

$numbers = [4,7,2,10,9];

//Two different way to append elements in the array
$numbers [] = 100;
array_push($numbers, 102);


for($i = 0; $i < sizeof($numbers); $i++)
{
    echo "Position ".$i." holds the value ".$numbers[$i]."\n";
}

foreach($numbers as $index => $number)
{
    echo "Position ".$index." holds the value ".$numbers[$index]."\n";
}