<?php				
	
	function controller_list() {
		include '../models/readlist.php';
		$names = readlist();
		include '../views/list.php';
	}
	
	controller_list();
?>