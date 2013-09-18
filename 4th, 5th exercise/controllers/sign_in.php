<?php 
	include '../models/sessions.php';
	include '../models/user_queries.php';
	include '../models/sql.php';
	$username = $_POST["username2"]; 
	$username = addslashes( $username ); 
	$password = md5($_POST["password2"]); 
	$result=sql_sign_in($username, $password);
	if($result==true) {
		$_SESSION['username'] = $username;
		include '../views/sign_in_true.php';
	}
	else {
		include '../views/sign_in_false.php';
	}
?>
		