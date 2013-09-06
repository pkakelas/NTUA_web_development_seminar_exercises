<?php 
	$con = mysqli_connect("localhost","akelas","akelas","boom_uploader") ; 
	
	if ($con->connect_errno>0) {
			header('Location:C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\views\sql_error.php');
	}
?>
