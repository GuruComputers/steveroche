<?php
	$page="testimonials";
	include 'head';
?>
<?php

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

	$sql = "INSERT INTO approved (roofing, plumbing, other, rating, comment, reviewer_name, review_date, status) VALUES ('$_POST[roofing]','$_POST[plumbing]', '$_POST[other]', '$_POST[rating]', '$_POST[comment]', '$_POST[name]', '$datetime', '$_POST[status]')";

	if ($conn->query($sql) === TRUE) {
    	echo "<br /><br />New record created successfully, Redirecting to Testimonials Page...";
    	header('Refresh: 5; URL=./testimonials.php');
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();

?>
<?php
	include 'foot';
?>