<?php
function printPyramid($n) {
    for ($i = 1; $i <= $n; $i++) {
        // Print spaces
        for ($j = $i; $j < $n; $j++) {
            echo " ";
        }
        // Print stars
        for ($k = 1; $k <= (3 * $i - 1); $k++) {
            echo "*";
        }
        // Move to the next line
        echo "\n";
    }
}

// Define the height of the pyramid
$height = 5;
printPyramid($height);

