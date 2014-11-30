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
	<form id="testimonial_form" name="testimonial_form" method="post" action="add_review.php">
	    <fieldset><legend>Add Testimonial</legend>	
	    	<p>
	    		<label for="reviewer_name">Your Name</label>
	    		<input type="textbox" name="reviewer_name" />
	    	</p>
	    	<p>
	    		<label for="service_type">Service Performed</label>
	    		<select name="service_type">
  					<option value="Roofing">Roofing</option>
  					<option value="Plumbing">Plumbing</option>
  					<option value="Other Works">Other Works</option>
				</select>
	    	<p>
	    		<label for="rating">Rating</label>
	    		<input type="radio" name="rating" value="5" /> 5 
	    		<input type="radio" name="rating" value="4" /> 4
	      		<input type="radio" name="rating" value="3" /> 3 
	      		<input type="radio" name="rating" value="2" /> 2 
	      		<input type="radio" name="rating" value="1" /> 1
	      	</p>
	      	<p>
	      		<label for="review">Testimonial</label>
	      		<textarea name="review" rows="8" cols="40">
	       		</textarea>
	       	</p>
	    	<p>
	    		<input type="submit" name="Submit" value="Submit" />
	    		<input type="reset" name="Submit2" value="Reset" />
	    	</p>
	   	 	<input type="hidden" name="status" value="Cat" id="status">
		</fieldset>
	</form>
</div>


<?php
	include 'foot';
?>