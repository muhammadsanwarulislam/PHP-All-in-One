<?php
declare(strict_types = 1);

include_once './2.php';

class Toaster {
    public array $slices = [];
    public int $size = 2;

    public function addSlice(string $slice): void
    {
        if(count($this->slices) < $this->size) {
            $this->slices[] = $slice;
        }
    }

    public function toast()
    {
        foreach($this->slices as $key => $slice) {
            echo ($key + 1).' : Toasting '.$slice.PHP_EOL;
        }
    }
}

//Creating Object Toaster class

$objToaster = new Toaster();
$objToaster->addSlice('Bread 1');
$objToaster->addSlice('Bread 2');
$objToaster->addSlice('Bread 3');

//Creating Object ToasterPro class
$objToasterPro = new ToasterPro();
$objToasterPro->addSlice('Bread 1');
$objToasterPro->addSlice('Bread 2');
$objToasterPro->addSlice('Bread 3');

$objToasterPro->toast();
