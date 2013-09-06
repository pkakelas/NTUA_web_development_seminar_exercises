<?php   
	include 'C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\models\sessions.php';
	$name=$_POST['name'];
	$surname=$_POST['surname'];
	$age=$_POST['age'];
	$password=$_POST['password'];
	$username=$_POST['username'];
	$email=$_POST['email'];  
	include 'C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\models\register_restrictions.php';
	include 'C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\models\user_sql_queries.php';
	$result=sql_register($name,  $surname,  $age,  $username,  $password, $email);
	if ($result=1) {
		$_SESSION['username'] = $username;
		header('location: C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\views\register_true.php');
	} 
	else { 
		header('C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\views\register_false_query.php');
	}
?>	
	