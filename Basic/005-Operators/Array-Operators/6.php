<?php 
/*
*	Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
*/
function TwoSum($nums, $target)
{
	for ($i = 0; $i < sizeof($nums); ++$i) {
		for ($j = $i+1; $j < sizeof($nums); ++$j) {
			if($nums[$i] + $nums[$j] == $target)
				return[$i,$j];
		}
	}
}

$nums = [3,2,4];
$target = 6;
print_r(TwoSum($nums,$target));