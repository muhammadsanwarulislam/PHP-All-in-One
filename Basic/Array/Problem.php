<?php

/* In the PHP file, write a program to perform a GET request on the route https://coderbyte.com/api/challenges/json/json-cleaning and then clean the object according to the following rules: Remove all keys that have values of N/A, -, or empty strings. If one of these values appear in an array, remove that single item from the array. Then console log the modified object as a string.

Example Input
{"name":{"first":"Daniel","middle":"N/A","last":"Smith"},"age":45}

Example Output
{"name":{"first":"Daniel","last":"Smith"},"age":45} */

$ch = curl_init('https://coderbyte.com/api/challenges/json/json-cleaning');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$data = curl_exec($ch);

var_dump($data);
die();
$newData = json_decode($data, true);

// foreach ($newData as $key => $value ) {
      
//   if ($value === '' || $value === 'N/A' || $value ===  '-' ) {
//       unset($newData[$key]);
//   }
//   if(is_array($value)) {
//     foreach ($value as $key1 => $val) {
//       if($val === '' || $val === 'N/A' || $val === '-'){
//         unset($newData[$key][$key1]);
//       }
//     }
//   }
// }

curl_close($ch);

print_r($newData);