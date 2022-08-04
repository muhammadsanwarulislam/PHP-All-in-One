<?php
trait Hello {
    public function sayHello() {
        echo 'Hello world!';
    }
}

class checkingTrait {
    
    use Hello;

    public function sayHello()
    {
        return 'Smile your face';
    }
}

$obj = new checkingTrait();
echo($obj->sayHello());
?>