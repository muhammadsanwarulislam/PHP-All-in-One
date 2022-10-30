<?php

/* Named Agruments */

declare(strict_types=1);

function namedArguments(int|float $x, int|float $y): int|float {
    if($x % $y === 0){
        return $x / $y;
    }
    return $x;
}

$x =6;
$y = 3.5;

echo namedArguments(y: $y, x: $x);