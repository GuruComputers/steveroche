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

	$sql = "SELECT * from approved WHERE status='Dog'";

	$result=mysql_query($sql);
	while($rows=mysql_fetch_array($result)){
?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td>Name</td>
<td>:</td>
<td><? echo $rows['reviewer_name']; ?></td>
</tr>
<tr>
<td width="117">Rating</td>
<td width="14">:</td>
<td width="357"><? echo $rows['rating']; ?> / 5</td>
</tr>
<tr>
<td valign="top">Comment</td>
<td valign="top">:</td>
<td><? echo $rows['comment']; ?></td>
</tr>
<tr>
<td valign="top">Date/Time </td>
<td valign="top">:</td>
<td><? echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>

<?php
}
mysql_close(); //close database
?>