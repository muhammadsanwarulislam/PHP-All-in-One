<?php
/**
 * Use of default parameters in functions
 */
function makeCoffee($type = "cappuccino") {
    return "make a coffee of $type.\n";
}
echo makeCoffee();
echo makeCoffee(null);
echo makeCoffee("espresso");