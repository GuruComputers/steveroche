<?php
	$page="testimonials";
	include 'head';
	error_reporting(E_ALL);
?>


<!--
Testimonials Content
Section : 2
Coded by : 
-->
<div id ="testimonials_content">
	<form action="add_review.php" method="post" accept-charset="utf-8">
    	<fieldset><legend>Add Testimonial</legend>
    		<p>
    			<label for="name">Your Name</label>
    			<input type="text" name="name" id="name" />
    		</p>
    		<p>
    			<label>Service Performed</label>
    			<input type="checkbox" name="roofing" value="1" /> Roofing
				<input type="checkbox" name="plumbing" value="1" /> Plumbing
				<input type="checkbox" name="other" value="1" /> Other Works
    		<p>
    			<label for="rating">Rating</label>
    			<input type="radio" name="rating" value="5" /> 5 
    			<input type="radio" name="rating" value="4" /> 4
    			<input type="radio" name="rating" value="3" /> 3
    			<input type="radio" name="rating" value="2" /> 2 
    			<input type="radio" name="rating" value="1" /> 1
    		</p>
    		<p>
    			<label for="comment">Comment</label>
    			<textarea name="comment" rows="8" cols="40"></textarea>
       		</p>
    		<p>
    			<input type="submit" value="Submit Review">
    		</p>
    		<input type="hidden" name="status" value="Cat" id="status">
		</fieldset>
	</form>
    <br /><br />
    <?php
        include 'view.php';
    ?>
</div>


<?php
	include 'foot';
?>