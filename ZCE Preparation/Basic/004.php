<?php
function modifyArray(&$arr) {
    foreach($arr as &$value) {
        $value = $value + 2;
    }
    $value = $value + 3;
}

$arr = [1,2,3];
modifyArray($arr);
print_r($arr);