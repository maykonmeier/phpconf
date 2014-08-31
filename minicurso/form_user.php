<html>
<body>
<form action="user_add_new.php" method="POST">
	Username<input type="text" id="username" name="username" /><br />
	Password<input type="password" id="password" name="password" /><br />
	Display name<input type="text" id="display_name" name="display_name" /><br />
	Name<input type="text" id="name" name="name" /><br />
	<input type="submit" id="submit" value="Enviar" />
</form>
<?php

include(__DIR__ . '/Model/User.php');

use Phpconf\Model\User;
$user = new User();
$users = $user->getUsers();

// var_dump($users->fetch_row());
// print_r($users->fetch_row());

?>

<table>
    <tr>
        <th>ID</th>
        <th>Usuários</th>
        <th>Senha</th>
        <th>Nome</th>
        <th>Quer ser chamado</th>
        <th>Ações</th>
    </tr>
    <?php
    while (list($id, $username, $password, $name, $display_name) = $users->fetch_row()) {
        echo "<tr>\n" . 
            "<td><a href=\"user.php?id=$id\">$id</a></td>" . 
            "<td>$username</td>" . 
            "<td>$password</td>" . 
            "<td>$name</td>" . 
            "<td>$display_name</td>" . 
            "<td><a href=\"user.php?id=$id\">Editar</a></td>" .
            "</tr>";
    }
    ?>
</table>

</body>
</html>