<?php
/* STRING */

$x = 2;
$y =3;

//Heredoc
$test = <<<TEXT
Line 1 $x
line 2 $y
line 3
TEXT;

echo nl2br($test);

//Nowdoc

$test = <<< 'TEXT'
line1
line2
line3
TEXT;

echo nl2br($test);