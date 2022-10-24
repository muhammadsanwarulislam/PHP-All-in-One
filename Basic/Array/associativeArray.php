<?php
//Associative array

/* 
    An associative array is accessed by a key which can be any string. In an
    associative array, values are stored against the key instead of a linear index
*/

$studentInfo = [];
$studentInfo ['Name']       = "muhammad";
$studentInfo ['Age']        = 21;
$studentInfo ['RollNumber'] = 143311010;
$studentInfo ['Contact']    = "student@gmail.com";

foreach($studentInfo as $key => $info)
{
    echo $key .":". $info. "\n";
}