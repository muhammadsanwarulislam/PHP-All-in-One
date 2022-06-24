<?php
//Access modifire for private

class Customer {
    private $name;
    
    function setName($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }

}

$nameObj = new Customer();
$nameObj->setName('muhammad');
echo $nameObj->getName();

