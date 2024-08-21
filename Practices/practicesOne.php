<?php

function test($arr) {
     $odd = [];
     $even = [];

    foreach ($arr as $key => $value) {
        if($value % 2) {
            array_push($odd, $value);
            $sum = array_sum($odd);
        }else {
            array_push($even, $value);
        }
    }
    return [ $odd, $even, $sum];
}


$arr = [1,2,3,4,5];
print_r(test($arr));