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


<!-- UL Menu by Neil Wakely -->
<nav>
<ul>
<?php
	$page="testimonials";
	$menu = array("Index", "Testimonials", "Gallery", "About", "Contact");
	foreach ($menu as $item) {
		if ($item == "Contact"){
			echo '<li><a href="#contact"';
		}else{
   	 		echo '<li><a href="'.strtolower($item).'.php"';
   	 	}
   	 	if (strtolower($item) == $page|| !"contact"){
   	 		echo ' class="selected"';
   	 	}
   	 	if (strtolower($item) == "index"){
   	 		$item = "Home";
   	 	}
   	 	echo '>'.$item.'</a></li>';
   	 }
?>
</ul>
</nav>
<img src="img/hr.png" class="hr"> <!-- top hr rule -->
</header>
</div>


<!--
Testimonials Content
Section : 2
Coded by : 
-->
<div id ="testimonials_content">
<!-- Page code goes here -->
</div>


<!--
FOOTER
Section : 5
Coded by : Neil Wakely
-->
<img src="img/hr.png" class="hr"> <!-- middle hr rule -->
<a name="contact"></a>
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
<img src="./img/hr.png" class="hr"> <!-- bottom hr rule -->
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
?>
<p><a href="#top"><img src="./img/top.png" class="toparrow"></a></p>
<p>Designed & Hosted by <a href="http://gurucomputers.co.uk" alt="guru computers ltd website" id="guru" target="_blank">Guru Computers Ltd.</a></p>
<?php
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
