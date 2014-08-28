<?php

// var_dump($argv);

include_once('helper.php');

$a = 10;
$b = 20;

if ($a > $b) {
	echo echoNL("a maior que b");
} else {
    echo echoNL("b maior que a");
}

echo echoNL("-------");

if ($argv[1] > $argv[2]) {
	$result = echoNL("Primeiro > segundo");
} else if ($argv[1] == $argv[2]) {
	$result = echoNL("São iguais");
} else {
	$result = echoNL("Segundo > primeiro");
}

echo $result;