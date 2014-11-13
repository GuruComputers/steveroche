<?php

	echo "<div id =\"slideshow\">";

/**********************************
      Facebook Image Slider
         By Dave Wakely
**********************************/


	
	$FBid = "468113209957335"; // Set the Page ID

	// Get The Contents of the Facebook Page
	$FBpage = file_get_contents("https://graph.facebook.com/".$FBid."/albums?fields=id,name,description,link,cover_photo,count");

	// Interpret Data with JSON
	$photoData = json_decode($FBpage, true, 512, JSON_BIGINT_AS_STRING);

	// Collate Albums
	$album_process = count($photoData['data']);

	// Process Albums
	for($x=0; $x<$album_process; $x++){

		$id = $photoData['data'][$x]['id'];
		$name = $photoData['data'][$x]['name'];
		$description = $photoData['data'][$x]['description'];
		$link = $photoData['data'][$x]['link'];
		$cover_photo = $photoData['data'][$x]['cover_photo'];
		$count = $photoData['data'][$x]['count'];

		// Exclude Albums we don't want displayed on the website
		if(
			$name != "Profile Pictures" &&
			$name != "Cover Photos" &&
			$name != "Timeline Photos"
		){
			$show_pictures_link = "photos.php?album_id={$id}&album_name={$name}";

			echo "<a href = '{$show_pictures_link}'>";
			echo "<img class='img-responsive' src='http://graph.facebook.com/{$cover_photo}/picture' alt=''>";
			echo "</a>";
		}

	}

	echo "</div>";

?>