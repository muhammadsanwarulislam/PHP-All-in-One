<?php
function isPalindrome($str) {
    $cleanedStr = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $str));

    $reversedStr = strrev($cleanedStr);
    
    return $cleanedStr === $reversedStr;
}


$input1 = "carrace";
$input2 = "abcd";

echo "$input1 is " . (isPalindrome($input1) ? "" : "not ") . "a palindrome.\n";
echo "$input2 is " . (isPalindrome($input2) ? "" : "not ") . "a palindrome.\n";

