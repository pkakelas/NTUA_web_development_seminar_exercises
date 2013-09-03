<?php 
	$con = mysqli_connect("localhost","akelas","akelas","boom_uploader") ; 
	
	if ($con->connect_errno>0) {
		die('Unable to connect to database [' . $db->connect_error . ']');
	}
?>
