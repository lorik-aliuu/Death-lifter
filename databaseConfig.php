<?php

class DatabaseConfig
{

    private $connection;

    private $host = "localhost";
    private $username = "root";
    private $dbname = "death-lifter";
    private $password = "";

    private function createConnection()
    {
        $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->connection->setAttribute(PDO::ATTR_AUTOCOMMIT, 1);
    }

    public function getConnection()
    {
        $this->createConnection();
        return $this->connection;
    }

}

class MySQLConfiguration
{

    private $connection;
    private $host = "localhost";
    private $username = "root";
    private $dbname = "death-lifter";
    private $password = "";

    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbname);
    }

    public function getConnection()
    {
        return $this->connection;
    }



}


