<?php
declare(strict_types = 1);

class Transcation {
    private int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function processing()
    {
        echo 'The transcation '. $this->amount . ' is processing';
    }
}

$objOfTranscation = new Transcation(30);
$objOfTranscation->processing(); 