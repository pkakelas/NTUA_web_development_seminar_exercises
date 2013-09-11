<?php   
	include '../models/sessions.php';
	include '../models/user_queries.php';
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$age = $_POST['age'];
	$password = $_POST['password'];
	$username = $_POST['username'];
	$email = $_POST['email'];  
	function register_validation ($name, $surname, $age, $username, $password, $email) {
		if	($age<13 || $name == "" || $surname == "" || $age == "" || $password == "" || $username == "" || $email == "" ||
		!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
			return "0";
		}
		else { 
			return "1";
		}
	}
	$problems=register_validation ($name, $surname, $age, $username, $password, $email);
	if ($problems==0) {
		include '../views/register_problems.php';
	}
	else if ($problems==1) {
		$result=sql_register($name,  $surname,  $age,  $username,  $password, $email); 
		if ($result==1) {
			$_SESSION['username'] = $username;
			include '../views/register_true.php';
		}
		else {
			include '../views/register_false_query.php';
		}
	}
?>	
	