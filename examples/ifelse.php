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

$a1 = $argv[1];
$a2 = $argv[2];

if ($a1 > $a2) {
	$result = echoNL("Primeiro > segundo");
} else if ($a1 == $a2) {
	$result = echoNL("São iguais");
} else {
	$result = echoNL("Segundo > primeiro");
}

echo $result;