<?php
class Nosql implements DatabaseConnection
{

    public $conn;

    public function connect($username,$servername,$password,$dbname)
    {
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=myDB", $username,$password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function disconnect()
    {
        $this->con->close();

        return "Databse Disconnected";
    }
}
