<?php 
include 'core/init.php'; 
include 'includes/overall/header.php';
?>
<head>
	<link rel="stylesheet" type="text/css" href="css/midslider.css" />
</head>
<div id="slider">
	<ul class="slides">
		<li class="slide"><img id="gallery" src="includes/images/welcome.jpg"/> </li>
		<li class="slide"><img id="gallery" src="includes/images/life.jpg"/> </li>
		<li class="slide"><img id="gallery" src="includes/images/land.jpg"/> </li>
		<li class="slide"><img id="gallery" src="includes/images/uni.jpg"/> </li>
	 	<li class="slide"><img id="gallery" src="includes/images/slide.jpg"/> </li>
	   	<li class="slide"><img id="gallery" src="includes/images/media.jpg"/> </li>
	   	<li class="slide"><img id="gallery" src="includes/images/welcome.jpg"/> </li>
	</ul>
</div>
<div id="information"> 
	<p id="intro_header">Welcome to UniQuest</p>

<?php
if (has_access($session_user_id, 1) === true) {
	echo 'You\'re an Admin!';
?>
	<br><button id="admin" onclick="window.location='admin.php'">Admin Page</button>
<?php
} else if (has_access($session_user_id, 2) === true) {
	echo 'You\'re a Moderator!';
}
?>
</div>
<br><br>
<?php include 'includes/overall/footer.php'; ?>