<?php   
	include '../models/sessions.php';
	include '../models/user_queries.php';
	$name = $username = addslashes($_POST['name']); 
	$surname =addslashes($_POST['surname']);
	$age = addslashes ($_POST['age']);
	$email = addslashes($_POST['email']);  
	$username = addslashes($_POST['username']);
	$password = md5($_POST['password']);
	function register_validation ($name, $surname, $age, $username, $password, $email) {
		if	($age<13 || $name == "" || $surname == "" || $age == "" || $password == "" || $username == "" || $email == "" ||
		!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
			return false;
		}
		else { 
			return true;
		}
	}
	$problems=register_validation ($name, $surname, $age, $username, $password, $email);
	if ($problems == false) {
		include '../views/register_problems.php';
	}
	else if ($problems == true) {
		$result=sql_register($name,  $surname,  $age,  $username,  $password, $email); 
		if ($result == true) {
			$_SESSION['username'] = $username;
			include '../views/register_true.php';
		}
		else {
			include '../views/register_false_query.php';
		}
	}
?>	
	