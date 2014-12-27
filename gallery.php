<?php
	$page="gallery";
	include 'head';
?>


<!--
Gallery Content
Section : 2
Coded by : 
-->
<div id ="gallery_content">
	<ul class="gallery_blocks">
	<?php
		$FBid = "468113209957335"; // Set the Page ID
		$fbPhotos_link = "http://graph.facebook.com/497225217046134/photos?fields=source";
		$fbPhotos = file_get_contents($fbPhotos_link);
		$obj = json_decode($fbPhotos, true);
		$photo_count = count($obj["data"]);

		for($x=0; $x<$photo_count; $x++)
		{
			$source = $obj["data"][$x]["source"];
			echo "<li><img src=\"".$source."\" alt=\"gallery image\"></li>"."\n";
		}
	?>
	</ul>
</div>


<?php
	include 'foot';
?>