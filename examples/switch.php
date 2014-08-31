<?php

include_once('helper.php');

const CAR = 1;
const BUS = 2;
const BIKE = 3;

define('FOO', 4);

function testSwitch($type) {
	switch ($type) {
		case CAR:
			return 'Carro!';

		case BUS:
			return 'Buzão!';

		case BIKE:
			return 'Bike!';

		case FOO:
			return 'Foo bar';
		
		default:
			return "[$type] desconhecido";
	}
}

echo echoNL(testSwitch($p));
