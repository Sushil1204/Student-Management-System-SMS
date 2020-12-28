<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_Management";
$port = 3307;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,$port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 }
 

?>