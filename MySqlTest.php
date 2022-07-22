<?php
require "Connections\MySqlConnection.php";
require "Queries\MySqlQuery.php";



$testConnection1 = new MySqlConnection;
$test1Connected = $testConnection1->connect("nucleus","localhost","password","nucleus");

//Testing Select
/*$query = "Select id,name From users";
$testQuery1 = new MySqlQuery($test1Connected);
$result = $testQuery1->select($query);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["name"] . "<br>";
    }
  } else {
    echo "0 results";
  }*/


//Testing Insert 

/*$query = "Insert into users (name,email,password) values ('test name','testname@gmail.com','password')";
$testQuery2 = new MySqlQuery($test1Connected);
echo $result = $testQuery2->insert($query);*/

//testing where 
/*$query = "Select id,name From users";
$testQuery3 = new MySqlQuery($test1Connected);
$result = $testQuery3->select($query)->where('name','=','Gerald Collins')->where('password','=','password')->get();
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"] . "<br>";
  }
} else {
  echo "0 results";
}*/

//Testing limiter 
/*$query = "Select id,name From users";
$testQuery4 = new MySqlQuery($test1Connected);
$result = $testQuery4->select($query)->limit(3);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"] . "<br>";
  }
} else {
  echo "0 results";
}*/

//Testing OrderBy 
$query = "Select id,name,email From users";
$testQuery5 = new MySqlQuery($test1Connected);
$result = $testQuery5->select($query)->orderby("email","asc")->get();
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
  }
} else {
  echo "0 results";
}
?>