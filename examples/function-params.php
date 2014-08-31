<?php

function takesArray($input)
{
    echo "$input[0] + $input[1] = ", $input[0]+$input[1] . "\n";
}

$values = array(3, 5);
takesArray($values);
