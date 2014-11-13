/**********************************
      Facebook Image Slider
         By Dave Wakely
**********************************/

<?php
	// Set the Page ID
	$FBid = '468113209957335';

	// Get The Contents of the Facebook Page
	$FBpage = file_get_contents(‘https://graph.facebook.com/’.$FBid.’/albums’);

	// Interpret Data with JSON
	