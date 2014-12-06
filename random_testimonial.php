<?php

	$servername = "localhost"; // Host name 
	$username = "sm-roche"; // Mysql username 
	$password = "customer31337"; // Mysql password 
	$db_name = "testimonials"; // Database name

	$conn=mysqli_connect($servername, $username, $password, $db_name);

	$sql = "SELECT * from approved WHERE status='Dog' ORDER by rand() LIMIT 1";

	$result=mysqli_query($conn, $sql);

	while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
		echo "<li>" . $rows['comment'] . "<p> - " . $rows['reviewer_name'] . "</p></li>";
	}

	mysqli_free_result($result); // Free up memory used by query
	$conn->close(); //close database

?>