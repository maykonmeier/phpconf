<?php

namespace Phpconf;

include(__DIR__ . '/Helper/UtilHelper.php');
include(__DIR__ . '/Db/MySQL.php');

use Phpconf\Helper\UtilHelper;
use Phpconf\Db\MySQL;

class Index
{
    private $db;
    private $a;

    public function __construct()
    {
        $this->a = 'Oi tudo bem?';
    }

    public function getUsers()
    {
        try {
            $this->db->query('SELECT * FROM user_table');
        } catch (\Exception $e) {
            echo "error";
            return;
        }
        return $this->db->getResult();
    }

    public function printUsers()
    {
        if ($result = $this->getUsers()) {
            while ($row = $result->fetch_row()) {
                printf("%s\n", print_r($row));
            }
            $result->close();
        }
    }

    public function getA()
    {
        return $this->a;
    }

    public function getDate()
    {
        return UtilHelper::formatDate('Teste');
    }

    public function connect()
    {
        $this->db = new MySQL('127.0.0.1', 'root', 'admin');
        try {
            $this->db->connect();
        } catch (\Exception $e) {
            error_log($e->getMessage());
            return false;            
        }
        return true;
    }

    public function close()
    {
        $this->db->close();
    }
}

$index = new Index();
// echo $index->getA();
if (!$index->connect()) {
    echo "não deu";
    return;
}
$users = $index->getUsers();
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