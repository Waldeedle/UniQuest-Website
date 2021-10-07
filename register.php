<?php 
include 'core/init.php';
logged_in_redirect(); 
include 'includes/overall/header.php';
?>

<head>
	<link rel="stylesheet" type="text/css" href="css/midsignup.css" />
</head>

<?php 
if (empty($_POST) === false) {
	$required_fields = array('username', 'password', 'password_again', 'first_name', 'email');
	foreach ($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = "Fields marked with an asterisk are required";
			break 1;
		}
	}

	if (empty($errors) === true) {
		if (user_exists($_POST['username']) === true) {
			$errors[] = 'Sorry, the username \'' . $_POST['username'] . '\' is already taken.';	
		}
		if (preg_match("/\\s/", $_POST['username']) == true) {
			$errors[] = 'Your username must not contain any spaces';
		}
		if (strlen($_POST['username']) > 32) {
			$errors[] = 'Your username must be less than 32 characters';
		}
		if (strlen($_POST['password']) < 6) {
			$errors[] = 'Your password must be at least 6 characters';
		}
		if (strlen($_POST['password']) > 32) {
			$errors[] = 'Your password must be less than 32 characters';
		}
		if ($_POST['password'] !== $_POST['password_again']) {
			$errors[] = 'Your passwords do not match';
		}
		if (strlen($_POST['first_name']) > 32) {
			$errors[] = 'Your first name must be less than 32 characters';
		}
		if (strlen($_POST['last_name']) > 32) {
			$errors[] = 'Your last name must be less than 32 characters';
		}
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'A valid email address is required';
		}
		if (email_exists($_POST['email']) === true) {
			$errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' is already in use.';
		}
	}
}

?>
<h1>Register</h1>

<?php
if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
	echo 'You\'ve been registered sucessfully! Please check your email to activate your account.';
} else {
	if (empty($_POST) === false && empty($errors) === true) {
		$register_data = array(
			'username' 		=> $_POST['username'],
			'password' 		=> $_POST['password'],
			'first_name' 	=> $_POST['first_name'],
			'last_name' 	=> $_POST['last_name'],
			'email' 		=> $_POST['email'],
			'email_code'	=> md5($_POST['username'] + microtime()),
		);

		register_user($register_data);
		header('Location: register.php?success');
		exit();

	} else if (empty($errors) === false) {
		echo output_errors($errors);
	}
?>

    <!-- the following is specifically for the signup html document -->
    <!-- the div that contains all the input boxes-->
    <div id="test">
        <h1>Enter Your Information Below:</h1>
			<form action="" method="post">
		<ul>
			<li>
				<input type="text" name="username" id="s-username" placeholder="Username">
			</li>
			<li>
				<input type="password" name="password" id="s-username" placeholder="Password">
			</li>
			<li>
				<input type="password" name="password_again" id="s-username" placeholder="Confirm Password">
			</li>
			<li>
				<input type="text" name="first_name" id="s-username" placeholder="First Name">
			</li>
			<li>
				<input type="text" name="last_name" id="s-username" placeholder="Last Name">
			</li>
			<li>
				<input type="text" name="email" id="s-username" placeholder="Email">
			</li>
			<li>
        	<button id="submit" type="submit">Submit</button>
			</li>
		</ul>
	</form>
    </div>
		

	<?php
}
 include 'includes/overall/footer.php'; 
?>