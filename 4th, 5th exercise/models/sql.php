<?php 
	$con = mysqli_connect("localhost","akelas","akelas","boom_uploader") ; 
	
	if ($con->connect_errno>0) {
			header('Location: ..\views\sql_error.php');
	}
?>
