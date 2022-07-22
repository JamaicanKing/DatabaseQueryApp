<?php

interface DatabaseConnection{
    public function connect($servername,$dbname,$username,$password);
    public function disconnect();  
}
?>