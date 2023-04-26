<?php

class ToasterPro extends Toaster{
    public function __construct()
    {
        parent::__construct();
        $this->size = 4;
    }

    public function tostBagel()
    {
        foreach($this->slices as $key => $slice) {
            echo ($key + 1).' Tosting Bagel '.$slice.PHP_EOL;
        }
    }
}