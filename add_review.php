<?php

	error_reporting(E_ALL);

	$servername = "localhost"; // Host name 
	$username = "sm-roche"; // Mysql username 
	$password = "customer31337"; // Mysql password 
	$db_name = "testimonials"; // Database name 

	// Connect to server and select database.
	$conn = new mysqli($servername, $username, $password, $db_name);

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

	$datetime=date("y-m-d h:i:s"); //date time

	$sql = "INSERT INTO live (name, comment, datetime) VALUES ('$_POST[name]', '$_POST[comment]', '$datetime')";

	if ($conn->query($sql) === TRUE) {
    	echo "New record created successfully";
    	echo $name;
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();

?>