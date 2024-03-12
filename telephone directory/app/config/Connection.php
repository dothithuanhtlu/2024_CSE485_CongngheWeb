<?php
require_once 'database.php';
class Connection
{
    private $localHost;
    private $userName;
    private $password;
    private $dbName;
    private $conn;
    public function __construct()
    {
        $this->localHost = HOST;
        $this->userName = USER;
        $this->password = PASS;
        $this->dbName = DATABASE;
        try {
            $this->conn = mysqli_connect($this->localHost, $this->userName, $this->password, $this->dbName);
        } catch (Exception $e) {
            $this->conn = null;
        }
    }
    public function connect()
    {
        return $this->conn;
    }
}
