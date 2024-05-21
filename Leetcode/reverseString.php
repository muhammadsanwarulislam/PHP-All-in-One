<?php 

function reversedString($arr) {
    $j = count($arr) - 1;

    for ($i = 0; $i < $j; $i++) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;
    }
    return $arr;
}

$arr = ["H","E","L","L","o"];
print_r(reversedString($arr));