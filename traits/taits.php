<?php
trait Success {
    public function response() {
        echo 'It is a success response';
    }
}

class checkTraits {
    use Success;
}

$obj = new checkTraits();
$obj->response();
?>