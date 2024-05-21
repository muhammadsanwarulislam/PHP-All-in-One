<?php
declare(strict_types=1);
function reverseInteger($arr) {
    // Define the signed 32-bit integer limits
    $INT32_MIN = -pow(2, 31);
    $INT32_MAX = pow(2, 31) - 1;

    // Handle the sign of the integer
    $sign = $arr >= 0 ? 1 : -1;
    $x = abs($arr);
    // Reverse the digits
    $reversed_x = (int)strrev((string)$x);

    // Apply the sign to the reversed integer
    $reversed_x *= $sign;

    // Check for overflow
    if ($reversed_x < $INT32_MIN || $reversed_x > $INT32_MAX) {
        return 0;
    }

    return $reversed_x;
}

$arr = -345;
print_r(reverseInteger($arr));