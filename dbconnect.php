<?php
$servername = "localhost";
$username = "root";
$password = "vips";
$dbname = "pubg";

// Create connection
$dbconnect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$dbconnect) {
    die("Connection failed: ".mysqli_error($dbconnect));
} 
// echo "Connected successfully";
?>