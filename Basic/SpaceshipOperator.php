<?php

$programmingLanguage = [
    [
        'rating'    => 4.5,
        'languages' => 'PHP'
    ],
    [
        'rating'    => 4,
        'languages' => 'PYTHON',
    ],
    [
        'rating'    => 4.8,
        'languages' => 'JAVASCRIPT',
    ],
];

usort($programmingLanguage, function($a, $b){
    return $a['rating'] <=> $b['rating'];
});

echo "<pre>";
print_r($programmingLanguage);
echo "</pre>";