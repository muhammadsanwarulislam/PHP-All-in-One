<?php
/* Variable variables */


$a = "hello";
$$a = "variabls";

//First way
echo "$a {$$a}";

//Second way
echo "$a  ${$a}";