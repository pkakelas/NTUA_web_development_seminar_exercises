<?php				
	include'../models/sessions.php';
	if ($_SESSION['username'] == "") {
		include '../views/log_in_first.php';
	}
	else {  
		include '../views/list.php';
	}
?>