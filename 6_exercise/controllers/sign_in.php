<?php 
	
	include '../models/sessions.php';
	include '../models/user.php';
	include '../models/sql.php';
	$username = $_POST["username2"]; 
	$password = $_POST["password2"]; 
	$result = sign_in($username, $password);
	if ($result) {
		$_SESSION['username'] = $username;
		include '../views/sign_in_true.php';
	}
	else {
		include '../views/sign_in_false.php';
	
	}
?>
		