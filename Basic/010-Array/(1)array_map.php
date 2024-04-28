<?php 
function cube($n): int{
    return $n*$n*$n;
}

$arr = [2,4,5,6];
print_r(array_map('cube',$arr));