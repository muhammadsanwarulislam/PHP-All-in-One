<?php
$str = 'PHP is a scripting language';

// $position = strpos($str, 'isss');
$position = stripos($str, 'php');


if($position !== false)
{
    echo $position;
}else{
    echo 'String not found';
}
