<?php
$post = [
	'title' => 'PHP array_key_exists',
	'thumbnail' => null
];

// The PHP array_key_exists() function checks if a key exists in an array. 
// The array_key_exists() function returns true if the $key exists in the $array. Otherwise, it returns false.
// Use the PHP array_key_exists() function to check if a key exists in an array.

var_dump(array_key_exists('thumbnail', $post)); // bool(true)
var_dump(isset($post['thumbnail'])); // bool(false)