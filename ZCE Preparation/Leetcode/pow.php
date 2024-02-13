<?php 

function myPow($x, $y) {
    // If the exponent $n is 0, the function returns 1 (since any number to the power of 0 is 1).
    if(!$x) {
        return 1;
    }
    return pow($x, $y);
}

$base = 10;
$exponent = 10;
print_r(myPow($base, $exponent));