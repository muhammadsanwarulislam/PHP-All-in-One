<?php

abstract class webDeveloper{

    public $name;

    public function __construct( $name) {
        $this->name = $name;
    }

    abstract public function displayname() :string;
}

class orangebd extends webDeveloper{
    
    public function displayname() : string{
        return "I'm from orangebd and my name is $this->name";
    }
}

$obj = new orangebd('muhammad');
echo $obj->displayname();
?>