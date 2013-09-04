<?php 
	include 'sessions.php';
	include 'sign_in_query.php';
	$username = $_POST["username2"]; 
	$password = $_POST["password2"]; 
	$result=sql_sign_in($username, $password);
	if($result==0){
		header('Location: sign_in_false.php');
	}
	else {
		header('Location: home.php');
	}
	
?>
		