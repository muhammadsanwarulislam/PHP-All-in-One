<?php
//Given an integer array nums, rotate the array to the right by k steps, where k is non-negative.

function rotate(&$nums, $k) 
{
    $data=$nums;
    for($i=0;$i<count($nums);$i++) {
        $nums[($i+$k) % count($nums)]=$data[$i];
    }
}

$nums = [1,2,3,4,5,6,7];
$k = 3;

rotate($nums,$k);
print_r($nums);
