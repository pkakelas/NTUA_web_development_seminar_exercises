<?php 
	include 'C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\models\sessions.php';
	include 'C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\models\user_sql_queries.php';
	$username = $_POST["username2"]; 
	$password = $_POST["password2"]; 
	$result=sql_sign_in($username, $password);
	if($result==1) {
		$_SESSION['username'] = $username;
		header('Location: C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\views\home.php');
	}
	else {
		header('Location: C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\views\sign_in_false.php');
	}
?>
		