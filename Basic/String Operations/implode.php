<?php
/*
    Use the PHP implode() function to join strings in an array with a separator between each element.
*/

$columns = ['first_name', 'last_name', 'email'];
$result = implode(',', $columns);
// $result = implode(',', array_map(fn ($c) => str_replace('_', ' ', $c), $columns));
echo $result;
