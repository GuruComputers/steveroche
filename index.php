<!--
Bespoke customer web site programmed by Dave & Neil Wakely
(c) Guru Computers Ltd.

Customer : S.M. Roche
Website : Managed
-->




<!--
Normal HTML code echoed out
Coded by : Neil Wakely
-->
<!DOCTYPE html>
<html>


<!--
Head section of HTML code echoed out
Coded by : Neil Wakely
-->
<head>
	<?php
		$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
		$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
		$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
		$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
		$fire = strpos ($_SERVER['HTTP_USER_AGENT'],"Mobile");
		if ($iphone || $android || $palmpre || $ipod || $berry || $fire == true) 
		{
			echo "<script>window.location='./mobile/'</script>";
		}
	?>
	<meta charset="utf-8">
	<title>S.M. Roche</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link href="http://fonts.googleapis.com/css?family=Lobster|Open+Sans" rel="stylesheet" type="text/cs">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script type="text/javascript" src="lib/jquery-1.3.2.min.js"></script> <!-- Needed for slideshow -->
	<script type="text/javascript" src="lib/jquery.tools.js"></script> <!-- Needed for slideshow -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<!--
Body of HTML starts here
Coded by : Neil Wakely
-->
<body>
	<div id="wrapper"> <!-- Main wrapper declared for page -->


<!--
HEADER 
Section : 1
Coded by : Neil Wakely
-->
	<div id="header">
	<header>
	<a href="index.php">
		<img src="img/logo.png" id="logo" alt="S.M. Roche Logo">
	</a>
	<nav>
		<ul>
		<?php
			$page="home";
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
		?>
		</ul>
	</nav>
	<img src="img/hr.png" class="hr"> <!-- top hr rule -->
	</header>
	</div>


<!--
Facebook Image Slider
Section : 2
Coded by : Dave Wakely
-->
	<?php

		echo "<div id =\"slideshow\">";
		$FBid = "468113209957335"; // Set the Page ID
		$fbPhotos_link = "http://graph.facebook.com/497225217046134/photos?fields=source";
		$fbPhotos = file_get_contents($fbPhotos_link);
		$obj = json_decode($fbPhotos, true);
		$photo_count = count($obj["data"]);
		echo "<div class=carousel>";
		echo "<ul class=panes>";
		for($x=0; $x<$photo_count; $x++){
			echo "<li>";
			$source = $obj["data"][$x]["source"];
			echo "<img src=\"".$source."\">";
			echo "</li>";
		}
		echo "</ul>";
		echo "</div>";
	?>
	<img src="img/hr.png" class="hr"> <!-- middle hr rule -->

<!--
CONTENT MENU 
Section : 3
Coded by : Dave Wakely
-->
	<?php
		include("3.php"); // <!-- Content menu -->
	?>

<!--
NEWS & CUSTOMER TESTIMONIALS 
Section : 4
Coded by : Dave Wakely
-->
	<?php
		include("4.php"); // <!-- News & Customer Testimonials -->
	?>

<!--
FOOTER
Section : 5
Coded by : Neil Wakely
-->
	<div id ="footer">
	<h3>Contact Information</h3>
	<table width="100%" height="100px">
		<tr>
			<td>
				<a href="tel:07871828709"><div class="phone"></div></a>
			</td>
			<td>
				<a href="mailto:steve@sm-roche.co.uk"><div class="email"></div></a>
			</td>
			<td>
				<a href="https://www.facebook.com/pages/S-M-Roche/468113209957335" target="_blank"><div class="facebook"></div></a>
			</td> 
			<td>
				<a href="http://twitter.com/intent/tweet?screen_name=sm_roche"><div class="tweet"></div></a>
			</td>
			<td>
				<a href="http://twitter.com/sm_roche" target="_blank"><div class="twitter"></div></a>
			</td>
		</tr>
	</table>
</div>

<!--
Copyright
Section : 6
Coded by : Neil Wakely
-->
<div id="copyright">
<img src="img/hr.png" class="hr"> <!-- bottom hr rule -->
<?php
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
?>
</div>


<!--
End of normal HTML code to close of page echoed out
Coded by : Neil Wakely
-->
</div>
</body>
</html>
