<?php 
include "Arithmetic.php";

$value = new Arithmetic\Addation;
$value->value_one = 15;
$value->value_two = 26;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAMESPACES</title>
</head>
<body>
    <?php $value->sum(); ?>
</body>
</html>