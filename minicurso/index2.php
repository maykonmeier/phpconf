<?php

namespace Phpconf;

include(__DIR__ . '/Model/User.php');

use Phpconf\Model\User;

$user = new User();
$users = $user->getUsers();

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