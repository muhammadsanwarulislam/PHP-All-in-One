<?php
/*
    Input = [1,4,3,2,3,5,2,2,2]
    Output = count : 4, (How may times use)
             value : 2  (whats the number)
*/
function numberCheck($arr)
{
    $val = array_count_values($arr);
    $ke = 0;
    $num = 0;
    foreach($val as  $k => $value){
    	if((int)$value > $num){
        	$num = $value;
            $ke = $k;
            
        }
    }
    $result = 'count:'.$num.', value:'.$ke;
    return $result;
}

echo '<pre>';
print_r(numberCheck([1,4,3,2,3,5,2,2,2]));
echo '</pre>';
?>