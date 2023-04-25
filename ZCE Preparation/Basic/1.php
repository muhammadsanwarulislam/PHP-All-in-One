<?php
for ($i=1; $i <= 2; $i++) { 
    for ($j=1; $j <=3 ; $j++) { 
        if($i == $j) continue;
        print("x= $i Y = $j").PHP_EOL;
    }
}