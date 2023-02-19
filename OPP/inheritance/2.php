<?php

class ToasterPro extends Toaster{
    public int $size = 4;

    public function tost()
    {
        foreach($this->slices as $key => $slice) {
            echo ($key + 1).''.$slice.PHP_EOL;
        }
    }
}