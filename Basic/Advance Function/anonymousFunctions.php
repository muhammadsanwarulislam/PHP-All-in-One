<?php

/* 
    Input = [10, 20, 30]
    Output = [100, 200, 300]
*/

//Traditional way
// function double_it($element)
// {
// 	return $element * 10;
// }

// $list = [10, 20, 30];
// $double_list = array_map(double_it($list), $list);

// echo "<pre>";
// print_r($double_list);
// echo "</pre>";

// $list = [10, 20, 30];

// $resut = array_map(function($element){
//     return $element * 10;
// }, $list);

// echo "<pre>";
// print_r($resut);
// echo "</pre>";


function multiplier($x)
{
	return function ($y) use ($x) {
		return $x * $y;
	};
}

$double = multiplier(2);
echo "<pre>";
echo $double(100); // 200
echo "</pre>";

$tripple = multiplier(3);
echo "<pre>";
echo $tripple(100); // 300
echo "</pre>";
