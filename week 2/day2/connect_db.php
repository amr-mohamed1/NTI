<?php 

$servername = "localhost";
$username = "root";
$password = "";

$con = new mysqli($servername, $username, $password,"to_do_list");

if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>