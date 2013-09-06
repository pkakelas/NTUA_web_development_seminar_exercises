<?php   
	include '..\models\sessions.php';
	$name=$_POST['name'];
	$surname=$_POST['surname'];
	$age=$_POST['age'];
	$password=$_POST['password'];
	$username=$_POST['username'];
	$email=$_POST['email'];  
	include '..\models\register_restrictions.php';
	include '..\models\user_sql_queries.php';
	$result=sql_register($name,  $surname,  $age,  $username,  $password, $email);
	if ($result=1) {
		$_SESSION['username'] = $username;
		header('location: ..\views\register_true.php');
	} 
	else { 
		header(' location: ..\views\register_false_query.php');
	}
?>	
	