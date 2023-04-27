<?php
namespace UserModel {
    class User {
        public function __construct() {
            echo 'I am in '.__CLASS__.PHP_EOL;
        }
        public function showData() {
            echo 'I am in '.__METHOD__.PHP_EOL;
        }
    }
    
    $obj = new User;
    $obj->showData();
    echo __NAMESPACE__;
}

// define('MIN_VALUE', '0.0');   // RIGHT - Works OUTSIDE of a class definition.

// define('MAX_VALUE', '1.0');   // RIGHT - Works OUTSIDE of a class definition.

//const MIN_VALUE = 0.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.

//const MAX_VALUE = 1.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.

