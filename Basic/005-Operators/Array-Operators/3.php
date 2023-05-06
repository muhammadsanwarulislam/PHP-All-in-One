<?php
$array = range(1,10);
shuffle($array);
foreach($array as $val) {
    echo($val).PHP_EOL;
}