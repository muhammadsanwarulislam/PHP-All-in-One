<?php
$array = [10, 20, 30, 40, 50];
$index = 7;

$wrappedIndex = $index % count($array);
echo "Element at wrapped index $wrappedIndex: " . $array[$wrappedIndex];