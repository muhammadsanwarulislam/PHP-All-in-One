<?php 
//  Given an integer array nums and an integer val, remove all occurrences of val in nums in-place. The order of the elements may be changed. Then return the number of elements in nums which are not equal to val. 
 

 function removeElement($nums, $val){
    $result = [];
    foreach($nums as $num){
        if($num != $val){
            // 1st way
            $result[] = $num;
            //second way
            // array_push($result,$num);
        }
    }
    return $result;
 }

 $nums = [3,2,2,3,2];
 $val  = 3;
 print_r(removeElement($nums,$val));