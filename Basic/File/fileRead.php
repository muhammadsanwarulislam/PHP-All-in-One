<?php
/* 
    Use the fread() function to read some or all contents from a file.
    Use the fgets() function to read a line from a file.
    Use the feof() function to test the end-of-file has been reached.
    Use the filesize() function to get the size of the file.
*/

$filename = 'readme.txt';
$lines = [];

$f = fopen($filename, 'r');

while (!feof($f)) {
    $lines[] = fgets($f);
}
echo "<pre>";
print_r($lines);
echo "</pre>";

fclose($f);