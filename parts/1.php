<div id="header">
<header>
<a href="index.php">
	<img src="img/logo.png" id="logo" alt="S.M. Roche Logo">
</a>
<nav>
<ul>
<?php
	if ($page == "home") {
		echo '<li><a href="index.php" class="selected">Home</a></li>';
	} else {
		echo '<li><a href="index.php">Home</a></li>';
	}
	
	if ($page == "testimonials") {
		echo '<li><a href="testimonials.php" class="selected">Testimonials</a></li>';
	} else {
		echo '<li><a href="testimonials.php">Testimonials</a></li>';
	}
	
	if ($page == "gallery") {
		echo '<li><a href="gallery.php" class="selected">Gallery</a></li>';
	} else {
		echo '<li><a href="gallery.php">Gallery</a></li>';
	}

	if ($page == "About") {
		echo '<li><a href="about.php" class="selected">About</a></li>';
	} else {
		echo '<li><a href="about.php">About</a></li>';
	}

	if ($page == "contact") {
		echo '<li><a href="contct.php" class="selected">Contact</a></li>';
	} else {
		echo '<li><a href="contact.php">Contact</a></li>';
	}
?>
</ul>
</nav>
</header>
</div>