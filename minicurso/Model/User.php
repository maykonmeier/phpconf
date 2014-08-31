<?php

namespace Phpconf\Model;

include(__DIR__ . '/../Db/MySQL.php');

use Phpconf\Db\MySQL;

class User
{
    private $db;

    public function __construct()
    {
        $this->connect();
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

    public function setUser($query)
    {
    	try {
    		$this->db->query($query);
    	} catch (\Exception $e) {
    		return;
    	}
    	return $this->db->getResult();
    }

    private function connect()
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















