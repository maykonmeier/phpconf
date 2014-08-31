<?php

if (isset($_GET['num'])) {
	$num = $_GET['num'];
} else {
	$num = 0;
}

switch($num) {
	case 0:
		echo 'acho q num nao foi passado';
		break;
	case 1:
		echo '1';
		break;
	case 2:
	case 3:
	case 4:
		echo 'entre 2 e 4';
		break;
	default:
		echo 'Maior q 2';
		break;
}





