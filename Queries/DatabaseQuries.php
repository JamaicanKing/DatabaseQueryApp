<?php
abstract class DatabaseQuries{
    //abstract function connect() : DatabaseConnection;
    abstract function select($query);
    abstract function where($column,$operator,$value);
    abstract function update($query);
    abstract function delete($query);
    abstract function insert($query);
}

?>