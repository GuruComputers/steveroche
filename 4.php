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
        <div style="float: left; width: 500px;">
        	<img src="img/speech.gif" class="img_l" alt="" />
            <div style="clear: both;"></div>
            <span class="span-content">
            <div id="testimonials">
        		<ul>
        			<?php
            
                $xmlFile = 'xml/testimonials.xml';
                $xslFile = 'xml/transform.xml';
                
                $doc = new DOMDocument();
                $xsl = new XSLTProcessor();
                
                $doc->load($xslFile);
                $xsl->importStyleSheet($doc);
                
                $doc->load($xmlFile);
                echo $xsl->transformToXML($doc);
            
            ?>
        		</ul>
   			 </div>
   			 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
			 <script src="lib/script.js"></script>
             </span><a href="testimonials.php" class="more2">Read More</a>
        </div>
        <div style="clear: both;"></div>
    </div>
<div style="height:25px"></div>
<div class="line"></div>
<div style="height:25px"></div>
</div>