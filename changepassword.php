<?php 
include 'core/init.php';
protect_page();

if (empty($_POST) === false) {
	$required_fields = array('current_password', 'password', 'password_again');
	foreach ($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = "You haven't filled in all the fields!";
			break 1;
		}
	}

	if (md5($_POST['current_password']) === $user_data['password']) {
		if(trim($_POST['password']) !== trim($_POST['password_again'])) {
			$errors[] = 'Your new passwords do not match';
		} else if (strlen($_POST['password']) < 6) {
			$errors[] = 'Your new password must be at least 6 characters';
		} else if (strlen($_POST['password']) > 32) {
			$errors[] = 'Your new password must be less than 32 characters';
		} else if (md5($_POST['password']) === $user_data['password']) {
			$errors[] = 'Your new password is the same as the current password';
		} 
	} else {
		$errors[] = 'Your current password is incorrect';
	}	
}

include 'includes/overall/header.php'; 
?>
<h1>Change Password</h1>

<?php
if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
	echo 'You\'ve sucessfully changed your password!';
} else{
	if (isset($_GET['force']) === true && empty($_GET['force']) === true) {
	?>
		<p>You must change your password now that you've recovered your account.</p>
	<?php
	}
if (empty($_POST) === false && empty($errors) === true) {
	change_password($session_user_id, $_POST['password']);
	header('Location: changepassword.php?success');
	exit();

} else if (empty($errors) === false) {
		echo output_errors($errors);
	}
?>

<form action="" method="post">
	<ul>
		<li>
			Current password:<br>
			<input type="password" name="current_password">
		</li>
		<li>
			New Password:<br>
			<input type="password" name="password">
		</li>
		<li>
			New Password again:<br>
			<input type="password" name="password_again">
		</li>
		<li>
			<input type="submit" value="Change password">
		</li>
	</ul>
</form>

<?php
}
include 'includes/overall/footer.php'; 
?>