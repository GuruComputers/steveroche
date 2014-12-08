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
<div id="content">
    <div>
        <div style="float:left; width: 250px; padding-left: 5px">
        	<h2>About Us</h2>
            <div style="height:10px"></div>
            <span class="span-describe">Although I have over 20 years experience as a flat roofer, I am also a qualified plumber and can do general house maintenance.
<p>I can repair or replace Guttering, Soffits, Fascias, Fencing and fit Velux Windows. </p>
<p align="center"><a href="about.php">Read More</a></span></p></div>
        <div style="float: left; width: 32px;"></div>
        <div style="float: left; width: 658px;">

            	<h2>Services</h2>
            	<div style="height:20px"></div>
                <div>

                	<div class="box" align="center">
                    	<span class="span-content">Plumbing Services</span>
                        <div style="height:10px"></div>
                  <img src="img/plumbing.png" alt="" /></div>
                  <div style="height:10px; width: 23px; float:left"></div>

                    <div class="box" align="center">
                    	<span class="span-content">Roofing Services</span> <br />
                    	<div style="height:10px"></div>
                        <img src="img/roofing.png" alt="" />
                  </div>

                  <div style="height:10px; width: 23px; float:left"></div>
                    <div class="box" align="center">
                    	<span class="span-content">Associated Works</span>
                    	<div style="height:10px"></div>
                        <img src="img/aworks.png" alt="" />
                    </div>

                    <div style="clear: both;"></div>
                    
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>     
    </div>
    
 <div style="height:25px"></div>
<div class="line"></div>
<div style="height:25px"></div>
<div>
    <div style="float: left; width: 32px; height:10px;"></div>
    <div style="float: left; width: 250px;">
        <a class="twitter-timeline"  
        href="https://twitter.com/hashtag/news" 
        data-widget-id="534734596181483520"
        data-screen-name="sm_roche"
        data-show-replies="false"
        data-tweet-limit="3"
        data-chrome="nofooter transparent">
        	<h2>News</h2>
        </a>
        <div style="height:20px"></div>
        <span class="span-content">
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
        </span></div>
        <div style="float: left; width: 21px; height:10px;"></div>
        <div style="float: right; width: 500px; padding-right: 5%;">
        	<img src="img/speech.gif" class="img_l" alt="" />
            <div style="clear: both;"></div>
            <span class="span-content">
            <div id="testimonials">
        		<ul>
        			<?php
                        include 'random_testimonial.php';
                    ?>
        		</ul>
   			 </div>
             </span><a href="testimonials.php" class="more2">Read More</a>
        </div>
        <div style="clear: both;"></div>
    </div>
<div style="height:25px"></div>
<div class="line"></div>
<div style="height:25px"></div>
</div>
<?php
	include 'foot';
?>