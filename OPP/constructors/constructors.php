<?php

class Customer {
    public $accountNumber;
    public $blance;

function __construct($accountNumber, $blance) {
    $this->accountNumber = $accountNumber;
    $this->blance = $blance;
}

function deposit($amount) {
    if($amount >= 0) {
        $this->blance += $amount;
    }
}

function withdraw($amount) {
    if($this->blance >= $amount) {
        $currentBlance = $this->blance - $amount;
        return 'Your current blance is '.$currentBlance;
    }
    return 'You have insufficent blance';
}

}

$objCustomer = new Customer(143311010, 120);
$objCustomer->deposit(20);
echo $objCustomer->withdraw(80);