<?php
class ExampleOfReadOnly {
  public readonly string $name;

  public function __construct(string $name) {
    $this->name = $name;
  }
}

$object = new ExampleOfReadOnly('muhammad');
// Legal read.
echo $object->name;

// Illegal reassignment. It does not matter that the assigned value is the same.
// $object->name = 'sanwarul';
