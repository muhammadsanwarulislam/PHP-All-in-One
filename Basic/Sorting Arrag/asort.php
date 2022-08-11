<?php

/* The asort() function sorts the elements of an associative array in ascending order. 
Unlike other sort functions, the asort() function maintains the index association. */

$mountains = [
    'K2' => 8611,
    'Lhotse' => 8516,
    'Mount Everest' => 8848,
    'Kangchenjunga' => 8586,
];
asort($mountains);

echo "<pre>";
print_r($mountains);
echo "</pre>";