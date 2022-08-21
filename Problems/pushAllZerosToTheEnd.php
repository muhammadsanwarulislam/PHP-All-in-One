<?php
/*
    Write a PHP program to push all zeros to the end of an array.
    Input : (0,2,3,4,6,7,10)
*/

function move_zero($arr)
{
    $count          = 0;
    $lengthOfArr    = sizeof($arr);

    for($i = 0; $i < $lengthOfArr; $i++)
    {
        if($arr[$i] != 0)
            $arr[$count++]   = $arr[$i];
    }
    
    while($count < $lengthOfArr)
        $arr[$count++] = 0;

    return $arr;
}

$num_list1 = array(0,2,3,4,6,7,10);
$num_list2 = array(10,0,11,12,0,14,17);
echo '<pre>';
print_r(move_zero($num_list1));
echo '</pre>';

echo '<pre>';
print_r(move_zero($num_list2));
echo '</pre>';