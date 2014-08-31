<?php // while.php

function testWhile()
{
	$a = array('Maça', 'Banana', 'Laranja', 'Pera', 'Manga', 'Abacaxi');

	while ($x = next($a)) {
		echo '>> ' . $x . "\n";
	}
}

function testDoWhile()
{
	$a = 10;
	do {
		echo '> ' . $a . "\n";
		$a--;
	} while ($a > 0);
}

if (isset($argv[1])) {
	$p = $argv[1];
} else {
	$p = FOO;
}

testWhile();
testDoWhile();