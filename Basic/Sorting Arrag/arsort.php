<?php

//To sort an associative array in descending order and maintain the index association, you use the arsort() function:

$mountains = [
    'K2' => 8611,
    'Lhotse' => 8516,
    'Mount Everest' => 8848,
    'Kangchenjunga' => 8586,
];
arsort($mountains);

echo "<pre>";
print_r($mountains);
echo "</pre>";