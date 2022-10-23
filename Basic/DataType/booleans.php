<?php
/*BLLEANS */

/*
    integers 0, -0  = false
    float 0.0, -0.0 = false
                ''  = false
                '0' = false
                []  = false
                null = false
*/

//what will be the output

$status = 'false';

if($status)
{
    echo "success";
}else{
    echo "fail";
}