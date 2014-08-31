<?php

namespace Phpconf\Db;

class MySQL
{
    private $db;
    private $result;

    private $host;
    private $user;
    private $pass;

    public function __construct($host, $user, $pass)
    {
        $this->host = $host;
        $this->pass = $pass;
        $this->user = $user;
    }

    /**
     * Método usado para conectar no banco de dados
     * @return void
     */
    public function connect()
    {
        $this->db = new \mysqli($this->host, $this->user, $this->pass, 'phpconf');
        if ($this->db->connect_error) {
            throw new \Exception('Cannot connect database: ' . $this->db->connect_error);
        }
    }

    public function close()
    {
        mysqli_close($this->db);
    }

    public function query($query)
    {
        if ($result = $this->db->query($query)) {
            $this->result = $result;
            return;
        }
        throw new \Exception('Cannot execute query');
    }

    public function getResult()
    {
        return $this->result;
    }
}
