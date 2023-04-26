<?php
define('FOO', 10);
$array = array(10 => FOO, "FOO" => 20);
print $array[$array[FOO]] * $array['FOO'];

/*
    In this question $array['FOO'] = 20 and $array[$array[FOO]] = 10. Because 'FOO' define as constant with value 10
*/ 