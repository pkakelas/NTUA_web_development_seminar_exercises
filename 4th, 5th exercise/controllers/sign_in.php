<?php 
	include '../models/sessions.php';
	include '../models/user_sql_queries.php';
	$username = $_POST["username2"]; 
	$password = $_POST["password2"]; 
	$result=sql_sign_in($username, $password);
	if($result==1) {
		$_SESSION['username'] = $username;
		header('Location: ../controllers/home.php');
	}
	else {
		header('Location: ../views/sign_in_false.php');
	}
?>
		