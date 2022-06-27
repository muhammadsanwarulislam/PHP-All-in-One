<?php
class Robot {
    public function greet() {
        return 'This is parent';
    }
}

class Android extends Robot {
    public function greet() {
        $greeting = parent::greet();
        return $greeting . ' from adroid';
    }
}

$android = new Android();
echo $android->greet();