<?php

namespace Phpconf;

include(__DIR__ . '/Model/User.php');

use Phpconf\Model\User;

if (isset($_POST) && isset($_POST['username'])) {
	$data = $_POST;

	$user = new User();

	$sql = 'INSERT INTO user_table(username,password,name,display_name) VALUES("' 
		. $data['username'] . '", "' . $data['password'] . '", "' . $data['name'] . '", "' 
		. $data['display_name'] . '")';

	echo $sql;
	
	$result = $user->setUser($sql);

	var_dump($result);
}

?>

<br />
<a href="form_user.php">Voltar</a>
