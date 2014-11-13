<?php

	echo "<div id =\"slideshow\">";

/**********************************
      Facebook Image Slider
         By Dave Wakely
**********************************/


	
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