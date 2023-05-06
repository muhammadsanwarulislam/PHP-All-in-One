<?php
require_once '../Helper/Helper.php';

//array_map() example-1
function cube($n)
{
    return ($n * $n *$n);
}
$a = [1,2,3,4];
$b = array_map('cube',$a);
prettyPrintArray($b).PHP_EOL;

//array_map() example-2
$fun = function(int $n):int
{
    return $n * 2;
};
prettyPrintArray(array_map($fun,range(1,5)));

//OR
// prettyPrintArray(array_map(fn($n): int => $n * 2, range(1, 5)));

//array_product()
$numbers = array(2, 3, 4, 5);
$product = array_product($numbers);
echo $product.PHP_EOL; 

//sizeof()
$fruits = array('apple', 'banana', 'orange');
$size = sizeof($fruits);
echo $size.PHP_EOL;

//array_chunk()
$input_array = array('a', 'b', 'c', 'd', 'e','f','g');
prettyPrintArray(array_chunk($input_array, 3));
prettyPrintArray(array_chunk($input_array, 2, true));

//array_fill()
$a = array_fill(5, 6, 'banana');
prettyPrintArray($a);

//array_filter() - Example - 1
$numbers = array(1,2,3,4,5,6,7,8,9);
$filter_numbers = array_filter($numbers,function($number){return $number % 2 != 0;});
prettyPrintArray($filter_numbers);

//array_filter() - Example - 2
function isOdd($number) {
    return $number % 2 != 0;
}
$filter_numbers = array_filter($numbers,'isOdd');
prettyPrintArray($filter_numbers);

//compact()
$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";
$location_vars = array("city", "state");
$result = compact("event", $location_vars);
prettyPrintArray($result);

//array_key_exists()
$search_array = array('first' => null, 'second' => 4);
// returns false
echo isset($search_array['first']);
// returns true
prettyPrintArray(array_key_exists('first', $search_array));

//array_shift()
$fruits = array("apple", "banana", "orange");
$first_fruit = array_shift($fruits);
echo $first_fruit; // Output: "apple"
print_r($fruits); // Output: Array ( [0] => banana [1] => orange )