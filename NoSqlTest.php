<?php
require "Connections\NoSqlConnection.php";
require "Queries\NoSqlQuery.php";



$testConnection1 = new NoSqlConnection;
$test1Connected = $testConnection1->connect("nucleus","localhost","password","nucleus");


$query = "Select id,name From users";
$testQuery1 = new MySqlQuery($test1Connected);
$result = $testQuery1->select($query);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["name"] . "<br>";
    }
  } else {
    echo "0 results";
  }

?>