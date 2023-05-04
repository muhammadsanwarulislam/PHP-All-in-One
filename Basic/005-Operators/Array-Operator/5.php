<?php
/**
 * Difference between isset vs array_key_exists
 * isset() does not return true for array keys that correspond to a null value, while array_key_exists() does.
 */
$arry_search = ['First' => NULL, 'Second' => 10];

var_dump(isset($arry_search['First']));             //bool(false)
var_dump(array_key_exists('First',$arry_search));   //bool(true)