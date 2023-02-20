<?php
class User {
    public function __construct(
        public string $name,
        public string $email,
        public int $age = 0,
        private bool $isAdmin = false
    ) {}
}


$objOfUser = new  User('muhammad','muhammad@gmail.com',TRUE);
var_dump($objOfUser);