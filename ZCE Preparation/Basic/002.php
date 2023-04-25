<?php

function magic($p, $q) {
    return ($q == 0) ? $p : magic($q, $p % $q);
}

print_r(magic(100,20));