<?php 

function removeElement(&$arr,$element) {
    $count = 0;
    foreach ($arr as $k => $v) {
        if($arr[$k] != $element){
            $arr[$count] =$arr[$k];
            $count++;
        }
    }
    return $arr;
}

$arr = [0,1,2,2,3,0,4,2];
$element = 3;
print_r(removeElement($arr, $element));