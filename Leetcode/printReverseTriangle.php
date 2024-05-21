<?php
function printReverseTriangle($n) {
    for ($i = $n; $i >= 1; $i--) {
        // Print spaces before the stars in each row
        for ($j = $n; $j > $i; $j--) {
            echo " ";
        }
        // Print stars in each row
        for ($k = 1; $k <= $i; $k++) {
            echo "* ";
        }
        // Move to the next line
        echo "\n";
    }
}

// Define the height of the triangle
$height = 5;
printReverseTriangle($height);

