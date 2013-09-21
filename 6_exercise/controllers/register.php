<?php   

	include '../models/sessions.php';
	include '../models/user.php';
	include '../controllers/user_validation_functions.php';
	$name = $_POST['name']; 
	$surname = $_POST['surname'];
	$age = $_POST['age'];
	$email = $_POST['email'];  
	$username = $_POST['username'];
	$password = $_POST['password'];
	$problems = register_validation ($name, $surname, $age, $username, $password, $email);
	$arrlength = count($problems);
	if ($arrlength !== 0) {
		include '../views/register_problems.php';
	}
	else {
		$result = register($name,  $surname,  $age,  $username,  $password, $email); 
		if ($result == true) {
			$_SESSION['username'] = $username;
			include '../views/register_true.php';
		}
		else {
			include '../views/register_false_query.php';
		}
	}

?>	
	