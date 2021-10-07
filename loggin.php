<?php 
include 'core/init.php';
logged_in_redirect(); 
include 'includes/overall/header.php';
?>

<head>
	<link rel="stylesheet" type="text/css" href="css/midsignup.css" />
</head>

	<h2>Log in</h2>
	<div class="inner">
		<form action="login.php" method="post">
			<ul id="login">
				<li>
					Username:<br>
					<input type="text" name="username" id="s-username">
				</li>
				<li>
					Password:<br>
					<input type="password" name="password" id="s-username">
				</li>
				<li>
        			<button id="submit" type="submit">Submit</button>
				</li>
				<li>
					Forgetten your <a href="recover.php?mode=username">username</a> or <a href="recover.php?mode=password">password</a>?
				</li>
			</ul>
		</form>
	</div>
</div>
<?php
 include 'includes/overall/footer.php'; 
?>