<?php
/**********************************
      Facebook Image Slider
         By Dave Wakely
**********************************/


	// Set the Page ID
	$FBid = "468113209957335";

	// Get The Contents of the Facebook Page
	$FBpage = file_get_contents("https://graph.facebook.com/".$FBid."/albums");

	// Interpret Data with JSON
	$photoData = json_decode($FBpage);

	//Temp Test Echo
	echo $FBid;

	// Get Album List
	foreach ( $photoData->data as $data )
	{
		echo "<li>".$data->name."</li>";
	}
?>