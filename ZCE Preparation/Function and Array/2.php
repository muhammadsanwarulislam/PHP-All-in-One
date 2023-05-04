<?php
$array = array("a1" => 'x', "a2" => 'y', "a3" => 'z');
$sort = asort($array);

foreach($array as $keys => $val) {
    print_r("$keys = $val").PHP_EOL;
}