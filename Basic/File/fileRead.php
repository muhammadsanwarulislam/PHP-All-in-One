<?php

$filename = 'readme.txt';
$lines = [];

$f = fopen($filename, 'r');

if (!$f) {
    return;
}

while (!feof($f)) {
    $lines[] = fgets($f);
}
echo "<pre>";
print_r($lines);
echo "</pre>";

fclose($f);