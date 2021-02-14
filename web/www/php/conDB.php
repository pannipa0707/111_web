<?php
$servername = "db";
$username = "root";
$password = "test";
$db = "rachaseema";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

//Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";


?>