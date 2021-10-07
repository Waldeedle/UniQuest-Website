<header>
	<div id="banner">
		<a id="clear" href="http://localhost/index.php">
			<img class ="icon" src="includes/images/Icon.png"/>
		</a>

		<div class="header">
			<a href="http://localhost/aboutus.php" id="link1">About Us</a>
			<a href="http://localhost/contact.php" id="link">Contact Us</a>
			<a href="http://localhost/universities.php" id="link2">Universities</a>
			<a href="http://localhost/programs.php" id="link3">Programs</a>
			<a href="http://localhost/forum.php" id="link4">Forums</a>
			<?php
			if (logged_in() === false) {
				include 'includes/logsign.php';
			} else {
				include 'includes/logout.php';
			}
			?>
		</div>
 	</div>

	<div class="clear"></div>
</header>