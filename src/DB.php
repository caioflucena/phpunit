<?php

namespace Src;

class DB
{
    public $conn;

    public function __construct()
    {
        $this->conn = new \PDO('mysql:host=mysql;dbname=clear', "root", "password");
    }

    public function getDbTableData()
    {
        $stmt = $this->conn->prepare("SELECT * FROM pessoa");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
