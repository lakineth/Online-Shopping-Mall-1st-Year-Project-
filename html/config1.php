<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "User";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->error) {
 die("Connection failed: " . $conn->connect_error);
}

?>