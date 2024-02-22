<?php 

function addTwoNumber($arr, $target) {
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i+1; $j < count($arr); $j++) {
            if ($arr[$i] + $arr[$j] === $target) {
                return [$i,$j];
            }
        }
    }
}

$arr = [1,3,4,5,2];
$target = 7;

print_r(addTwoNumber($arr, $target));
