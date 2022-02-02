<?php
namespace Arithmetic;

class Addation {
    public $value_one = '';
    public $value_two = '';

    public function sum(){
        $vl = $this->value_one + $this->value_two;
        echo $vl;
    }
}
?>