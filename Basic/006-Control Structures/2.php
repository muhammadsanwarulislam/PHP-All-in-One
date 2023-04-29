<?php
/**
 * Switch
 */
$type = 1;
switch ($type) {
    case 1:
        echo "Switch is loose comparison, this means you can compair (int)1 to (string)'1' ".PHP_EOL;
        break;
    case 2:
        echo "Without break statement, switch execute line by line. To get proved please comment the break then you will get confirmation hahaha".PHP_EOL;
        break;
    case 3:
        echo "If no case branch matches, and there is no default branch, then no code will be executed, just as if no if statement was true.".PHP_EOL;
        break;
    default:
        echo "Default statement";
        break;
}

/**
 * Match
 */

 //Example #1 Basic match usage
$food = 'cake';

$return_result = match($food) {
    'cake' => 'This food is cake',
    'apple' => 'This food is apple',
    'bar'   => 'This food is bar'
};

var_dump($food);

//Example #2 Example of an unhandled match expression
$condition = 2;

function foo() {
    return 'Foo function';
}
function bar() {
    return 'bar function';
}
try {
    match ($condition) {
        1, 2 => foo(),
        3, 4 => bar(),
    };
} catch (\UnhandledMatchError $e) {
    var_dump($e);
}

//Example #3 Using a generalized match expressions to branch on integer ranges
$age = 23;

$result = match (true) {
    $age >= 65 => 'senior',
    $age >= 25 => 'adult',
    $age >= 18 => 'young adult',
    default => 'kid',
};

var_dump($result);