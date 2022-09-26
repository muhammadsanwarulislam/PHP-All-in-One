<?php
interface A{
    public function demo();
}

class B implements A{
    public function demo(){
        echo "This is demo method which is define in A interface";
    }
}

$obj = new B();
$obj->demo();
?>