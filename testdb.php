<?php
$servername = "sm-roche.co.uk";
$username = "root";
$password = "1071816ReTrO31337elite";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>