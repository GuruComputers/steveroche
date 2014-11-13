<?php
	/***********************************************************************************
	Bespoke customer web site programmed by Dave & Neil Wakely
	(c) Guru Computers Ltd.

	Customer : S.M. Roche
	Website : Managed
	***********************************************************************************/





	/***********************************************************************************
	Declare variables needed for the page
	Coded by Neil Wakely
	***********************************************************************************/
	$page="home"; // Main menu link highlight variable

	
	/***********************************************************************************
	Normal HTML code echoed out
	Coded by : Neil Wakely
	***********************************************************************************/
	echo "<!DOCTYPE html>"."\n";
	echo "<html>"."\n";


	/***********************************************************************************
	Head section of HTML code echoed out
	Coded by : Neil Wakely
	***********************************************************************************/
	echo "<head>"."\n";
	echo "<meta charset=\"utf-8\">"."\n";
	echo "<title>S.M. Roche</title>"."\n";
	echo "<link rel=\"stylesheet\" href=\"css/normalize.css\">"."\n";
	echo "<link href=\"http://fonts.googleapis.com/css?family=Lobster|Open+Sans\" rel=\"stylesheet\" type=\"text/css\">"."\n";
	echo "<link rel=\"stylesheet\" href=\"css/main.css\">"."\n";
	echo "<link rel=\"stylesheet\" href=\"css/responsive.css\">"."\n";
	echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">"."\n";
	echo "</head>"."\n";


	/***********************************************************************************
	Body of HTML starts here
	Coded by : Neil Wakely
	***********************************************************************************/
	echo "<body>"."\n";
	echo "<div id=\"wrapper\">"."\n"; // Main wrapper declared for page


	/***********************************************************************************
	HEADER 
	Section : 1
	Coded by : Neil Wakely
	***********************************************************************************/
	echo "<div id=\"header\">"."\n";
	echo "<header>"."\n";
	echo "<a href=\"index.php\">";
	echo "<img src=\"img/logo.png\" id=\"logo\" alt=\"S.M. Roche Logo\">";
	echo "</a>"."\n";
	echo "<nav>"."\n";
	echo "<ul>"."\n";
	if ($page == "home") {
		echo "<li><a href=\"index.php\" class=\"selected\">Home</a></li>"."\n";
	} else {
		echo "<li><a href=\"index.php\">Home</a></li>"."\n";
	}
	
	if ($page == "testimonials") {
		echo "<li><a href=\"testimonials.php\" class=\"selected\">Testimonials</a></li>"."\n";
	} else {
		echo "<li><a href=\"testimonials.php\">Testimonials</a></li>"."\n";
	}
	
	if ($page == "gallery") {
		echo "<li><a href=\"gallery.php\" class=\"selected\">Gallery</a></li>"."\n";
	} else {
		echo "<li><a href=\"gallery.php\">Gallery</a></li>"."\n";
	}

	if ($page == "About") {
		echo "<li><a href=\"about.php\" class=\"selected\">About</a></li>"."\n";
	} else {
		echo "<li><a href=\"about.php\">About</a></li>"."\n";
	}

	if ($page == "contact") {
		echo "<li><a href=\"contct.php\" class=\"selected\">Contact</a></li>"."\n";
	} else {
		echo "<li><a href=\"contact.php\">Contact</a></li>"."\n";
	}
	echo "</ul>"."\n";
	echo "</nav>"."\n";
	echo "</header>"."\n";
	echo "</div>"."\n";	


	/***********************************************************************************
	SLIDESHOW
	Section : 2
	Coded by : Dave Wakely
	***********************************************************************************/
	include("2.php"); // Slideshow


	/***********************************************************************************
	CONTENT MENU 
	Section : 3
	Coded by : Dave Wakely
	***********************************************************************************/
	include("3.php"); // Content menu


	/***********************************************************************************
	NEWS & CUSTOMER TESTIMONIALS 
	Section : 4
	Coded by : Dave Wakely
	***********************************************************************************/
	include("4.php"); // News & Customer Testimonials


	/***********************************************************************************
	FOOTER
	Section : 5
	Coded by : Neil Wakely
	***********************************************************************************/
	include("5.php"); // Footer


	/***********************************************************************************
	Copyright
	Section : 6
	Coded by : Neil Wakely
	***********************************************************************************/
	echo "<div id=\"copyright\">"."\n";
	$start=2014;
	$current=date("Y");
	$cy="";
	if ($current=$start) {
		$cy=$start;
	}
	if ($current>$start) {
		$cy=$start."-".$current;
	}
	echo "Designed & Hosted by <a href=\"http://gurucomputers.co.uk\" alt=\"guru computers ltd website\" id=\"guru\" target=\"_blank\">Guru Computers Ltd.</a>"."<br />"."\n";
	echo "&copy"." ".$cy." S.M. Roche"."\n";
	echo "</div>"."\n"."\n";


	/***********************************************************************************
	End of normal HTML code to close of page echoed out
	Coded by : Neil Wakely
	***********************************************************************************/
	echo "</div>"."\n";
	echo "</body>"."\n";
	echo "</html>"."\n";
?>