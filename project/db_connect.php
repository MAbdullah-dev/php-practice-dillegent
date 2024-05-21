<?php
// define('DB_HOST','localhost');
// define('DB_USER','user');
// define('DB_PASS','');
// define('DB_NAME','feedback');


$server="localhost";
$username="root";
$password="";
$db_name="feedback";



$conn=new mysqli($server,$username,$password,$db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  ?>