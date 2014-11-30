<?php

	$host="localhost"; // Host name 
	$username="smroche"; // Mysql username 
	$password="JDZfLtEBJFhRCNRB"; // Mysql password 
	$db_name="testimonials"; // Database name 
	$tbl_name="approved"; // Table name 

	// Connect to server and select database.
	mysql_connect("$host", "$username", "$password")or die("cannot connect server "); 
	mysql_select_db("$db_name")or die("cannot select DB");

	$datetime=date("y-m-d h:i:s"); //date time

	$sql="INSERT INTO $tbl_name(review_name, service_type, rating, review, status, datetime)VALUES('$reviewer_name', '$service_type', '$rating', '$review', '$status', '$datetime')";
	$result=mysql_query($sql);

	//check if query successful 
	if($result){
	echo "Successful";
	echo "<BR>";

	else {
	echo "ERROR";
	}
	
	mysql_close();

?>