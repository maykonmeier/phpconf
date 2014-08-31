<?php

function quadrado ($num)
{
    return $num * $num;
}

if (isset($argv[1])) {
	echo quadrado($argv[1]);
} else {
	echo quadrado(3);
}