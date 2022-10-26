<?php

$status = 3;
switch ($status) {
    case 1:
        echo "This is paid";
        break;
    case 2:
        echo "This is paindding";
        break;
    
    default:
        echo "This is default";
        break;
}


match($status) {
    1 => print 'Paid',
    2 => print 'paindding',
};