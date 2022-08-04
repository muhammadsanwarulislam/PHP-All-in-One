<?php

$tasks = [
    ['Learn PHP programming', 2],
    ['Practice PHP', 2],
    ['Work', 8],
    ['Do exercise', 1],
];
$tasks[] = ['Build something matter in PHP', 0];

usort($tasks, function($a, $b) {
    return $a[1] <=> $b[1];
});

echo "<pre>";
print_r($tasks);
echo "</pre>";
