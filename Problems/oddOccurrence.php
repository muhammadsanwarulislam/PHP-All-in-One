<?php
/* 
    Write a PHP program to find the single number which occurs odd number of times and other numbers occur even number of times.
    Input : 4, 5, 4, 5, 2, 2, 3, 3, 2, 4, 4

*/

function odd_occurrence($arr)
{
    $result = 0;
     
    # Traverse the array
    foreach ($arr as &$value)
    {
        # Xor (exclusive or)
        # Bits that are set in $a or $b but not both are set.
        $result = $result ^ $value;
        // echo $result . ' ';
    }
    return $result;
}
$num1 = array(4, 5, 4, 5, 2, 2, 3, 3, 2, 4, 4);
print_r(odd_occurrence($num1)."\n");