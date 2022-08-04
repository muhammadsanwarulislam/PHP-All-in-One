<?php

$countries = [
    'China' => ['gdp' => 12.238 , 'gdp_growth' => 6.9],
    'Germany' => ['gdp' => 3.693 , 'gdp_growth' => 2.22 ],
    'Japan' => ['gdp' => 4.872 , 'gdp_growth' => 1.71 ],
    'USA' => ['gdp' => 19.485, 'gdp_growth' => 2.27 ],
];

// sort the country by GDP
uasort($countries, function ($x, $y) {
    return $x['gdp'] <=> $y['gdp'];
});

// show the array
foreach ($countries as $name => $stat) {
    echo "$name has a GDP of {$stat['gdp']} trillion USD with a GDP growth rate of {$stat['gdp_growth']}%" . '<br>';
}