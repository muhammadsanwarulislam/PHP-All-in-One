<?php
/* SPLAT OPERATOR */
declare(strict_types=1);


function sum(... $numbers) {
    $flag =0;
    foreach($numbers as $index => $value) {
        $flag += $value;
    }
    return $flag;
    // return array_sum($numbers);
}

$numbers = [4,5,8,12];
echo sum(...$numbers);