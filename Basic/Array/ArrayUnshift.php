<?php
$permissions = [
    'view',
    'edit',
    'create'
];

// The array_unshift() function adds the new elements to the beginning of the input array, it changes the indexes to start from zero.
array_unshift($permissions, 'new','profile','missingIndex');

echo "<pre>";
print_r($permissions);
echo "</pre>";