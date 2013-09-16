<?php 
	include '../models/sessions.php';
	include '../models/user_sql_queries.php';
	$username = $_POST["username2"]; 
	$password = md5($_POST["password2"]); 
	$result=sql_sign_in($username, $password);
	if($result==1) {
		$_SESSION['username'] = $username;
		include '../views/sign_in_true.php';
	}
	else {
		include '../views/sign_in_false.php';
	}
?>
		