<?php
class NosqlConnection implements DatabaseConnection
{

    public $conn;

    public function connect($servername,$dbname,$username,$password)
    {
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        
    }

    public function disconnect()
    {
        $this->conn = null;

        return "Database Disconnected";
    }
}
