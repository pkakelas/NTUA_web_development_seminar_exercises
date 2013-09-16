<?php 
	include '../models/upload_query.php';
	$name = $_FILES['file']['name']; 
	$username = $_SESSION['username'];
	$description = $_POST['description']; 
	$size = $_FILES['file']['size'];
	$type = $_FILES["file"]["type"];
	$target_path = "C:/test/$name";
	function name_correct($name) {
		$name = strtolower($_FILES['file']['name']);
		$name = str_replace(" ", "_", $name);  
		return $name;
	}
	$name=name_correct($name);
	if (file_exists("C:/test/$name")) {
		include '../views/upload_false_exists.php';
	} 
	else if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
		$result = file_upload($username, $name, $size, $type, $description, $target_path);
		if($result==1) {			
			$_SESSION['name'] = $name;
			include '../views/upload_true.php';
		}
		else { 
			include '../views/upload_false_query.php';
		}		
	}	
?>
	
