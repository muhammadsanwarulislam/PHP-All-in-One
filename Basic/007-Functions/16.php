<?php

// What is the output of the following?

function oneDotEach($n) {
	if ($n > 0) {
		oneDotEach(--$n);
		echo ".";
	} else {
		return $n;
	}
}

oneDotEach(4);

