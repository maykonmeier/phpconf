<?php

var_dump($_GET);

$a = $_GET['a'];
$b = $_GET['b'];

echo "a: $a; b: $b";

echo '<br />';

if ($a > $b) {
	echo 'a > b';
} else if($a == $b) {
	echo 'a == b';
} else {
	echo 'a < b';
}