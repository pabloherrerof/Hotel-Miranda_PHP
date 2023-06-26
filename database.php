<?php
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

class DatabaseHandler {
    private $mysqli;
    private $dbHost;
    private $dbUser;
    private $dbPass;
    private $dbName;

    public function __construct()
    {
        $this->dbHost = $_ENV['DB_HOST'];
        $this->dbUser = $_ENV['DB_USER'];
        $this->dbPass = $_ENV['DB_PASS'];
        $this->dbName = $_ENV['DB_NAME'];
    }

    public function open()
    {
        $this->mysqli = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        if ($this->mysqli->connect_error) {
            die("Connection failed: " . $this->mysqli->connect_error);
        }
        
    }

    public function executeSelectQuery($query)
    {
        $this->open();
        $result = $this->mysqli->query($query);
        if (!$result) {
            die("Query execution failed: " . $this->mysqli->error);
        }
        // Process the query result here
        return $result;

        $this->close();
    }

    public function close()
    {
        $this->mysqli->close();
    }
}
