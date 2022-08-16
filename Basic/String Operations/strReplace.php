<?php
/*
    Use the str_replace() function to replace a substring with another string.
    Use the str_ireplace() function to search a substring case-insensitively and replace it with another string.
*/

$message = 'The quick brown fox jumps over the lazy dog';
$animals = ['fox', 'dog'];
$newAnimals = ['cat','cow'];

$strReplace = str_replace($animals, $newAnimals, $message);
print_r($strReplace);