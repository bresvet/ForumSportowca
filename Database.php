<?php

require_once "config.php";

class Database
{
    private $username;
    private $password;
    private $host;
    private $database;

    public function __construct()
    {
        $this->username = USERNAME;
        $this->password = PASSWORD;
        $this->host = HOST;
        $this->database = DATABASE;
    }

    public function connect()
    {
        try
        {
            $connection = new PDO
            (
                "mysql:host=$this->host;
                dbname=$this->database",
                $this->username,
                $this->password
            );

            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        }
        catch(PDOException $e)
        {
            die("Failed to connect: " . $e->getMessage());
        }
    }
}