<?php

function onTick() {
    echo 'Tick';
}

register_tick_function('onTick');

declare(ticks=2);

$i = 0;
$length = 5;

while($i < $length) {
    echo $i++ ."<br />";
}