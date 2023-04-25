<?php

function magic($p, $q) {
    return ($q == 0) ? $p : magic($q, $p % $q);
}
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);
print_r(magic(100,20));