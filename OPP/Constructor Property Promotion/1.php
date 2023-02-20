<?php
class User {
    public function __construct(
        public string $name,
        public string $email,
        public int $age = 0,
        private bool $isAdmin = false
    ) {}
    

    public function userInfo()
    {
        echo 'Name : '.$this->name.','.$this->email.','.$this->age;
    }
}


$objOfUser = new  User('muhammad','muhammad@gmail.com',TRUE);
var_dump($objOfUser->userInfo());