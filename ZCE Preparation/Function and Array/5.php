<?php
/**
 * Passing function parameters by reference
 */
function addSomeExtra(&$string) {
    $string .= 'you are passing value as reference';
}
$str = 'This is string,';
addSomeExtra($str);
echo $str;