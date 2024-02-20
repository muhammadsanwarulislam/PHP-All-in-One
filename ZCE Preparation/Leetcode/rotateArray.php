<?php 

function roatedArray(&$array,$n) {
    $data = $array;
    for ($i = 0; $i < count($array); $i++) {
        $array[($i+$n) % count($array)]=$data[$i];
    }
    return $array;
}

$arr = [3,4,5,8,1,5];
$n =3;
print_r(roatedArray($arr,$n));
