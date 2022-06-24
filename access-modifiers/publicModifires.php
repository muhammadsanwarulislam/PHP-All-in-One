<?php
// Access modifire for public
class Customer {
    public $name;

    public function getName() {
        return $this->name;
    }
}

$nameObj = new Customer();
$nameObj->name = 'muhammad Sanwarul';
echo $nameObj->getName();