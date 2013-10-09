<?php   
	
	function controller_register($name, $surname, $age, $email, $username, $password) {
		include '../models/sessions.php';
		include '../models/user.php';
		include '../controllers/user_validation_functions.php';
		$problems = register_validation($name, $surname, $age, $username, $password, $email);
		$arrlength = count($problems);
		if (count($problems)) {
			include '../views/register_problems.php';
		}
		else {
			$result = register($name, $surname, $age, $username, $password, $email); 
			if ($result) {
				$_SESSION['username'] = $username;
				include '../views/register_true.php';
			}
			else {
				include '../views/register_false_query.php';
			}
		}
	}
	
	controller_register($_POST['name'], $_POST['surname'], $_POST['age'], $_POST['email'], $_POST['username'], $_POST['password']);

?>	
	