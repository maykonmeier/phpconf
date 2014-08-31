<?php
// for e foreach

echo "\n FOR \n\n";

function testFor()
{
	$list = array('Cavalo', 'Vaca', 'Boi', 'Cachorro');
	for ($count = 0; $count < sizeof($list); $count++) {
		echo "[$count] => " . $list[$count] . "\n";
	}
}

testFor();

echo "\n FOREACH \n\n";

function testForEach()
{
	$list = array('Cavalo', 'Vaca', 'Boi', 'Cachorro');
	foreach ($list as $key => $value) {
		echo "[$key] => " . $value . "\n";
	}
}

testForEach();