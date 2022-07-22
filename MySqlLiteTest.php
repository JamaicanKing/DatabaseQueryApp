<?php
require "Connections/MySqlLiteConnection.php";
require "Queries/MySqlLiteQuery.php";

$testConnection1 = new MySqlLiteConnection;
$test1Connected = $testConnection1->connect("localhost","nucleus","nucleus","password");

$query = "Select id,name From users";
$testQuery1 = new MySqlLiteQuery($test1Connected);
$result = $testQuery1->select($query);
print_r($result);

?>