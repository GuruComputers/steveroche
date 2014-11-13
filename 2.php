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

	echo "<div class=\"fadein\">";

	for($x=0; $x<$photo_count; $x++){

		$source = $obj["data"][$x]["source"];

		echo "<a href=\"{$source}\" data-gallery>";
			echo "<img src=\"".$source."\">";
		echo "</a>";
	}

	echo "</div>";
	echo "</div>";

?>