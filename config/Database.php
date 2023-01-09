<?php

class Database {
    private $serverName = "127.0.0.1";
    private $databaseName = "backendchallenge";
    private $username = "root";
    private $password = "";
    protected $connection;

    public function __construct()
    {
        try{
            $this->connection = new PDO("mysql:host=$this->serverName;dbname=$this->databaseName", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo "<p style='font-size: 2rem; font-family: monospace;'>" .$e->getMessage() . "</p>";
        }
    }
}