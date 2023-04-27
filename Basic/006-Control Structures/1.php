<?php
/**
 * do-while vs whie
 */
$x = 1;
do {
    echo "The number is: $x" . PHP_EOL;
    $x++;
} while ($x <= 2);

$i = 0;
while ($i < 5) {
    echo "Counting the value $i" . PHP_EOL;
    $i++;
}

/**
 * for loop example
 */

 //example-1
 for($i = 0; $i < 5; $i++) {
    echo "Value of i $i".PHP_EOL;
 }

 //example-2
 for($j = 0; ; $j++) {

    if($j > 5) {
        break;
    }
    echo "Value of j $j".PHP_EOL;
 }

 //example-3
 $k = 0;
 for(;;) {
    if($k > 5) {
        break;
    }
    echo "The value of k $k".PHP_EOL;
    $k++;
 }