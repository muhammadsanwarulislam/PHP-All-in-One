<?php 
$fun = function($n): int {
    return $n*2;
};

$n = [1,2,4,5];
print_r(array_map($fun,$n));