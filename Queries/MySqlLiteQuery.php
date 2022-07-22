<?php

require "DatabaseQuries.php";
class MySqlLiteQuery extends DatabaseQuries
{

    public $conn;
    
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function select($query)
    {
         $result = $this->conn->query($query);

         return $result->fetchAll(PDO::FETCH_ASSOC);

        /*if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              return "id: " . $row["id"]. " - Name: " . $row["name"] . "<br>";
            }
          } else {
            return "0 results";
          }*/
       
    }
    

    public function update($query): string
    {
        $result = $this->conn->query($query);
        return $result;
    }

    public function delete($query): string
    {
        $result = $this->conn->query($query);
        return $result;
    }

    public function insert($query): string
    {
        $result = $this->conn->query($query);
        return $result;
    }
}
