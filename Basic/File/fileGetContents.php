<?php

$fileName = 'readme.txt';

if(!is_readable($fileName))
{
    die('There is no content or missing file');
}

// Use the PHP file_get_contents() function to read a file into a string.
echo(file_get_contents($fileName));