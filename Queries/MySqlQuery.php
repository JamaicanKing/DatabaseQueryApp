<?php
require "DatabaseQuries.php";

class MySqlQuery extends DatabaseQuries
{
    public $query;
    public $conn;
    
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function select($query)
    {
        $this->query = $query;
        return $this;
    }

    public function insert($query): string
    {
        $result = $this->conn->query($query);
        if($result){
            return "Insert Successful";
        }else{
            return "Insert failed";
        }
    }

    public function where($column,$operator,$value)
    {
         
         if(strpos($this->query,"where") === false){
            $this->query = $this->query . " where $column $operator '$value'";
         }else{
            $this->query = $this->query . " AND $column $operator '$value'";
         }
        return $this;
    }



    public function update($query)
    {
        $this->query = $query;
        return $this;
    }

    public function delete($query)
    {
        $this->query = $query;
        return $this;
    }

    public function limit(int $row)
    {
        $this->query = $this->query . " limit $row";
        $result = $this->conn->query($this->query);
        return $result;
    }

    public function orderby($columnName,$sort = "asc")
    {
        $this->query = $this->query . " order by $columnName $sort";
        return $this;
    }

    public function get(){

        $result = $this->conn->query($this->query);
        return $result;
    }

    
}

