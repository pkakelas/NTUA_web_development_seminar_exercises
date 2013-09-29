<?php				
	
	include '../models/sessions.php';
	include '../models/readlist.php';
	if ($_SESSION['username'] == "") {
		include '../views/log_in_first.php';
	}
	else {  
		$names = readlist();
		include '../views/list.php';
	}

?>