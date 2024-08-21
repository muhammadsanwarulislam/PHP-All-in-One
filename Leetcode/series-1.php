<?php

$sum = 0;
$start = 1;
$end = 105;
$increment = 7;

for ($i = $start; $i <= $end; $i += $increment) {
    $sum += $i;
}

echo "The summation of the series is: " . $sum;
