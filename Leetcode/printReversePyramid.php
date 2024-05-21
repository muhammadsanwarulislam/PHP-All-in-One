<?php
function printReversePyramid($n) {
    for ($i = $n; $i >= 1; $i--) {
        // Print spaces
        for ($j = $n; $j > $i; $j--) {
            echo " ";
        }
        // Print stars
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        // Move to the next line
        echo "\n";
    }
}

// Define the height of the pyramid
$height = 5;
printReversePyramid($height);

