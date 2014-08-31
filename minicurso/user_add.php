<?php

$data = $_POST;

$user = $data['user'];
$pass = $data['pass'];

if (empty($user) || empty($pass)) {
	
}

echo $user . 'added! <br />';

echo "<a href='form.php'>Voltar</a>";