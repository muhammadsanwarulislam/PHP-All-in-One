<?php
/* 
    Use the PHP strlen() function to get the number of bytes of a string.
    Use the PHP mb_strlen() function to get the number of characters in a string with a specific encoding.
*/

$message = 'Hello';

// $length = strlen($message);
$length = mb_strlen($message);

echo $length;