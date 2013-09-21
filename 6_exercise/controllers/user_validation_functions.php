<?php
	
	function register_validation ($name, $surname, $age, $username, $password, $email) {
		$problems = array();
		if	(!is_numeric($age)) {
			$problems[] = "Age must be a number";
		}
		if ($age<13) {
			$problems[] = "You are to young to register to Boom Uploader..
				Wait some years, until you are 13 and then discover the imagine world of  Boom Uploader !!";
		} 
		if ($name == "" || $surname == "" || $age == "" || $password == "" || $username == "" || $email == "") {
			$problems[] = "All the forms are required in order to register.";
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
			$problems[] = "E-mail is not valid.";
		}
		return $problems;
	}

?>