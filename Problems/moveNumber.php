<?php

$arr = [12,3,5,'hi',100,'muhammad'];

$num = [];

$str = [];

foreach($arr as $key => $value)
{
	switch (gettype($value)) {
		case 'integer':
			$num[] = $value;
			break;

		case 'string':
			$str[] = $value;
			break;
		
		default:
			echo 'default';
			break;
	}
}
echo "<pre>";
print_r($num);

print_r($str);
echo "</pre>";