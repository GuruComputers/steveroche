<?php
	$page="home";
	echo "<!DOCTYPE html>\n";
	echo "<html>\n";
	echo "<head>\n";
	echo "<meta charset='utf-8'>\n";
	echo "<title>S.M. Roche</title>"
	echo "<link rel='stylesheet' href='css/normalize.css'>\n";
	echo "<link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans' rel='stylesheet' type='text/css'>\n";
	echo "<link rel='stylesheet' href='css/main.css'>\n";
	echo "<link rel='stylesheet' href='css/responsive.css'>\n";
	echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
	echo "</head>\n";
	echo "<body>\n";
	echo "<div id="wrapper">\n";
	include("parts/1.php");
	include("parts/2.html");
	include("parts/3.html");
	include("parts/4.html");
	include("parts/5.php");
	include("parts/6.php");
	echo "</div>\n";
	echo "</body>\n";
	echo "</html>\n";
?>