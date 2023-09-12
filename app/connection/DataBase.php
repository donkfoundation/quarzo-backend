<?php
class Database {
    private $host = "127.0.0.1";
    private $username = "root";
    private $password = "";
    private $database_name = "quarzo";
    private $connection;

    public function __construct() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database_name);
        
        if ($this->connection->connect_error) {
            die("Connection error: " . $this->connection->connect_error);
        }
    }

    public function executeQuery($query) {
        $result = $this->connection->query($query);

        if (!$result) {
            die("Query error: " . $this->connection->error);
        }
        
        return $result;
    }

    public function closeConnection() {
        $this->connection->close();
    }
}