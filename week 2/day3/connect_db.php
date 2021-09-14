<?php 

$servername = "localhost";
$username = "root";
$password = "";

$con = new mysqli($servername, $username, $password,"article");

if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>