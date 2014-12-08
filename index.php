<?php
	$page="index";
	include 'head';
	echo '<div id ="slideshow">';
	$FBid = "468113209957335"; // Set the Page ID
	$fbPhotos_link = "http://graph.facebook.com/497225217046134/photos?fields=source";
	$fbPhotos = file_get_contents($fbPhotos_link);
	$obj = json_decode($fbPhotos, true);
	$photo_count = count($obj["data"]);
	echo "<div class=carousel>"."\n";
	echo "<ul class=panes>"."\n";
	for($x=0; $x<$photo_count; $x++){
		echo "<li>";
		$source = $obj["data"][$x]["source"];
		echo "<img src=\"".$source."\">"."\n";
		echo "</li>"."\n";
	}
	echo '</ul>';
	echo '</div>';
?>

<img src="./img/hr.png" class="hr"> <!-- middle hr rule -->


<!--
CONTENT MENU 
Section : 3
Coded by : Dave Wakely
-->
<?php
	include("3.php"); // <!-- Content menu -->
	include("4.php"); // <!-- News & Customer Testimonials -->
	include 'foot';
?>