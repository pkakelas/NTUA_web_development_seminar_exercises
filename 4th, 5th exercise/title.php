<h1> <img src="h1.png" />  </h1>

<?php	
	function application_error($msg) {
		echo $msg;
		include 'footer.php';
		die();
	}
?>