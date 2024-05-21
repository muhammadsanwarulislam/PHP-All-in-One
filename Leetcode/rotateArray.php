<?php

/**
 * Given an integer array nums, rotate the array to the right by k steps, where k is non-negative.
 */

function rotateArray(&$arr, $k)
{
    $length = count($arr);
    $k %= $length; // Adjust k in case it's greater than the length of the array

    // Create a copy of the original array
    $data = $arr;
   
    // Loop through the array and assign elements from the copy based on the new index after rotation
    for ($i = 0; $i < $length; $i++) {
        $newIndex = ($i + $k) % $length;
        echo "Original index: $i, New index: $newIndex, Value: {$data[$i]}\n";
        $arr[$newIndex] = $data[$i];
    }
    return $arr;
}

$arr = [1, 2, 3, 4, 5, 6, 7];
$k = 1;
print_r(rotateArray($arr, $k));
