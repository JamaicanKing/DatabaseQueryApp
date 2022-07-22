<?php
require "DatabaseConnection.php";
class MySqlConnection implements DatabaseConnection
{

    public $conn;

    public function connect($username, $servername, $password,$dbname)
    {
        // Create connection
        $this->conn = new mysqli($servername, $username, $password,$dbname);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        return $this->conn;
    }

    public function disconnect()
    {
        $this->conn->close();

        echo "Databse Disconnected";
    }
}
