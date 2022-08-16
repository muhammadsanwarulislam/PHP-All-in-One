<?php
/*
    Use the PHP substr() function to extract a substring from a string.
    Use the negative offset to extract a substring from the end of the string. The last character in the input string has an index of -1.
    Use the negative length to omit a length number of characters in the returned substring.
    Use the PHP mb_substr() function to extract a substring from a string with non-ASCII characters.
*/

$msg = 'PHP is cool';

$substr = substr($msg, -4);
print_r($substr);