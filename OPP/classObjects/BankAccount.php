<!-- Let's create a class to check blance is available or not provide bank account -->

<?php

/* 
    -> Objects have states and behaviors.
    > A class is a blueprint for creating objects.
    -> Properties represent the object’s state, and methods represent the object’s behavior. Properties and methods have visibility.
    -> Use the new keyword to create an object from a class.
    -> The $this variable references the current object of the class.
*/
class BankAccount {
    public $accountNumber;
    public $blance;

    public function deposit($amount) {
        if($amount > 0)
        $this->blance += $amount;
    }

    public function withdraw($amount) {
        if($amount <= $this->blance) {
            $currentBlance = $this->blance - $amount;
            return 'Congratulation!! Your current blance is ' .$currentBlance;
        }
        return 'You have insufficient blance';
    }
}

$account = new BankAccount();
$account->accountNumber = 143311010;
$account->blance = 120;
$account->deposit(50);
echo $account->withdraw(100);