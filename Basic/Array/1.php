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
prettyPrintArray(array_map(fn($n): int => $n * 2, range(1, 5)));

//array_product()
$numbers = array(2, 3, 4, 5);
$product = array_product($numbers);
echo $product.PHP_EOL; 

//sizeof()
$fruits = array('apple', 'banana', 'orange');
$size = sizeof($fruits);
echo $size.PHP_EOL;