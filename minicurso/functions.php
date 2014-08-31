<?php

function printMd5Name($firstName = null, $lastName = null)
{
	echo md5($firstName) . " $lastName";
}

printMd5Name('maykon', 'meier');
echo '<br />';

function quadrado($num)
{
	return $num*$num;
}

$result = quadrado(4);
echo $result;