<?php

	error_reporting(E_ALL);

	$host="localhost"; // Host name 
	$username="sm-roche"; // Mysql username 
	$password="customer31337"; // Mysql password 
	$db_name="testimonials"; // Database name 

	// Connect to server and select database.
	$conn = new mysqli("$host", "$username", "$password", "$db_name");

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

	$datetime=date("y-m-d h:i:s"); //date time

	$sql = "INSERT INTO approved (review_name, service_type, rating, review, status, datetime) VALUES ('$reviewer_name', '$service_type', '$rating', '$review', '$status', '$datetime')";

	if ($conn->query($sql) === TRUE) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();

?>