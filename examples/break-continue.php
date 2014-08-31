<?php

function testBreak()
{
	for ($i = 0; $i < 5; ++$i) {
	    if ($i == 2) 
	        continue;
	    echo "$i\n";
	}
}

testBreak();