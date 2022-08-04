<?php
$languages = [
    'PHP',
    'JAVA',
    'PYTHON',
    'JAVASCRIPT'
];

// The array_pop() function removes an element from the end of an array and returns that element.
$removeElement = array_pop($languages);

echo $removeElement;

echo "<pre>";
print_r($languages);
echo "</pre>";