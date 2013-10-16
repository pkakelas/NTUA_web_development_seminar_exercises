<?php
	
	$resource = $_GET['resource'];
	if ($resource) {
		include "controllers/$resource.php";
	}
	else {
		include "views/main.php";
	}

?>
