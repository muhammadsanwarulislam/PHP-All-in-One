<?php

class BankAccount {
    
    private $blance;

    public function getBlance() {
       return $this->blance;
    }

    public function deposit($amount) {
        if($amount >= 0) {
            $this->blance += $amount;
        }
        return $this;
    }

}

class SavingAccount extends BankAccount {
    private $interestRate;

    public function setInterestRate($interestRate) {
        $this->interestRate = $interestRate;
    }

    public function addInterest() {
        $interest = $this->interestRate * $this->getBlance();
        $this->deposit($interest);
    }
}

$account = new SavingAccount();
$account->deposit(1000);
// set interest rate
$account->setInterestRate(0.05);
$account->addInterest();
echo $account->getBlance();