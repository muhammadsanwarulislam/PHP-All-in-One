<?php
/*
    1. Use the fopen() function to open a file for reading, writing, and appending.
    2. Always use the fclose() function to close the file that was open by the fopen() function.
    3. Use the file_exists() function to check if a file exists.
    4. Use the is_file() function to check if a path is a regular file, not a directory, and that file exists.
    5. Use the is_readable() function to check if a file exists and readable.
    6. Use the is_writable() function to check if a file exists and writable.
*/

$fileName = 'readme.txt';

if(!file_exists($fileName))
{
    die('The file '. $fileName. ' dose not exit');
}

$f = fopen($fileName, 'r');

if($f)
{
    echo 'The file ' .$fileName. ' is open';
    fclose($f);
}