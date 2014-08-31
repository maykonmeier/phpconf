<?php

$lis53 = array('cavalo', 'vaca', 'cachorro');

echo sizeof($lis53);
echo '<br />';

$total = sizeof($lis53);

/*for ($count = 0; $count < $total; $count++) {
	echo "Count = $count <br />";
	echo "[$count] => $lis53[$count]<br />";

	if ($count == 1) {
		break;
	}
}*/

for ($count = 0; $count < $total; $count++) {
	if ($count == 1) {
		continue;
	}
	echo "Count = $count <br />";
	echo "[$count] => $lis53[$count]<br />";
}