<?php
$servername = "eu-cdbr-west-02.cleardb.net:3306";
$username = "bbff78fde36256";
$password = "fc930970";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "Connected failed";
} 

//$conn->close();

//echo "Connected successfully";
 
?>