<?php 

function reverseWord($word) {
    $word = implode(" ", array_reverse(explode(" ", $word)));
    return $word;
}

$word = "My name is muhammad sanwarul islam";
print_r(reverseWord($word));