<?php				

	include '../models/sessions.php';
	if ($_SESSION['username'] == "") {
		include '../views/log_in_first.php';
	}
	else {  
		$username = $_SESSION['username'];
		include '../views/home.php';
	}
	
?>