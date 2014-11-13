<?php
	$page="home"; // Main menu link highlight variable
	/*
	Normal HTML code echoed output_add_rewrite_var*/
	echo "<!DOCTYPE html>"."\n";
	echo "<html>"."\n";
	/*
	Head section of HTML code echoed output_add_rewrite_var*/
	echo "<head>"."\n";
	echo "<meta charset=\"utf-8\">"."\n";
	echo "<title>S.M. Roche</title>"."\n";
	echo "<link rel=\"stylesheet\" href=\"css/normalize.css\">"."\n";
	echo "<link href=\"http://fonts.googleapis.com/css?family=Lobster|Open+Sans\" rel=\"stylesheet\" type=\"text/css\">"."\n";
	echo "<link rel=\"stylesheet\" href=\"css/main.css\">"."\n";
	echo "<link rel=\"stylesheet\" href=\"css/responsive.css\">"."\n";
	echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">"."\n";
	echo "</head>"."\n";
	/*
	Body of HTML starts here
	*/
	echo "<body>"."\n";
	echo "<div id=\"wrapper\">"."\n"; // Main wrapper declared for page
	/*
	HEADER coded by Neil Wakely
	*/
	echo "<div id=\"header\">"."\n";
	echo "<header>"."\n";
	echo "<a href=\"index.php\">"."\n";
	echo "<img src=\"img/logo.png\" id=\"logo\" alt=\"S.M. Roche Logo\">"."\n";
	echo "</a>"."\n";
	echo "<nav>"."\n";
	echo "<ul>"."\n";
	if ($page == "home") {
		echo '<li><a href="index.php" class="selected">Home</a></li>';
	} else {
		echo '<li><a href="index.php">Home</a></li>';
	}
	
	if ($page == "testimonials") {
		echo '<li><a href="testimonials.php" class="selected">Testimonials</a></li>';
	} else {
		echo '<li><a href="testimonials.php">Testimonials</a></li>';
	}
	
	if ($page == "gallery") {
		echo '<li><a href="gallery.php" class="selected">Gallery</a></li>';
	} else {
		echo '<li><a href="gallery.php">Gallery</a></li>';
	}

	if ($page == "About") {
		echo '<li><a href="about.php" class="selected">About</a></li>';
	} else {
		echo '<li><a href="about.php">About</a></li>';
	}

	if ($page == "contact") {
		echo '<li><a href="contct.php" class="selected">Contact</a></li>';
	} else {
		echo '<li><a href="contact.php">Contact</a></li>';
	}
	echo "</ul>"."\n";
	echo "</nav>"."\n";
	echo "</header>"."\n";
	echo "</div>"."\n";
	include("parts/2.html"); // Slideshow
	include("parts/3.html"); // Content menu
	include("parts/4.html"); // News & Customer Testimonials
	include("parts/5.php"); // Footer
	include("parts/6.php"); // Copyright
	/*
	End of normal HTML code to close of page echoed out
	*/
	echo "</div>"."\n";
	echo "</body>"."\n";
	echo "</html>"."\n";
?>