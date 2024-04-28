<?php
function romanToInteger($roman) {
    $romanNumerals = array(
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    );

    $integer = 0;

    for ($i = 0; $i < strlen($roman); $i++) {
        // Get the integer value of the current Roman numeral symbol
        $value = $romanNumerals[$roman[$i]];

        // If the current symbol represents a value less than the next symbol, subtract it
        if ($i + 1 < strlen($roman) && $romanNumerals[$roman[$i + 1]] > $value) {
            $integer -= $value;
        } else {
            $integer += $value;
        }
    }

    return $integer;
}

$romanNumeral = "MCMXCIV";
echo romanToInteger($romanNumeral); // Output: 1994
