<?php 
	
	function controller_sign_in($username, $password) {
		include 'models/sessions.php';
		include 'models/user.php';
		include 'models/sql.php';
		$result = sign_in($username, $password);
		if ($result) {
			$_SESSION['username'] = $username;
			header('Location: index.php?resource=home');
		}
		else {
			include 'views/sign_in_false.php';	
		}	
	}
	
	controller_sign_in($_POST["username2"], $_POST["password2"]);
		
?>
		
