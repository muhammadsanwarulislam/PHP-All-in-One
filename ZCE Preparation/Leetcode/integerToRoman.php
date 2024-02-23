<?php
function integerToRoman($number) {
    $result = '';
    $romanNumerals = array(
        1000 => 'M',
        900  => 'CM',
        500  => 'D',
        400  => 'CD',
        100  => 'C',
        90   => 'XC',
        50   => 'L',
        40   => 'XL',
        10   => 'X',
        9    => 'IX',
        5    => 'V',
        4    => 'IV',
        1    => 'I'
    );

    foreach ($romanNumerals as $value => $symbol) {
        // Repeat appending the current symbol while $number is greater than or equal to $value
        echo $value .' value with symbol '.$symbol.PHP_EOL;
        while ($number >= $value) {
            $result .= $symbol;
            $number -= $value;
            echo $number.' number'.PHP_EOL;
        }
    }

    return $result;
}

$number = 1994;
echo integerToRoman($number); // Output: MCMXCIV
