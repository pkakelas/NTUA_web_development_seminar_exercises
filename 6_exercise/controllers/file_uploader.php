<?php 
	
	include '../models/data.php';
	include '../models/sessions.php';
	include '../controllers/file_upload_functions.php';
	$filename = $_FILES['file']['name']; 
	$username = $_SESSION['username'];
	$description = $_POST['description'];
	$tmp_name = $_FILES['file']['tmp_name'];
	$size = $_FILES['file']['size'];
	$type = $_FILES["file"]["type"];
	$target_path = "C:/test/$filename";
	$name = name_correct($filename);
	if (!file_exists($tmp_name)){
		include '../views/upload_false_nothing.php';
	}
	else if (!valid_file_extension($filename)) {
		include '../views/upload_false_ext.php';		
	}
	else if (file_exists("C:/test/$filename")) {
		include '../views/upload_false_exists.php';
	} 
	else if (move_uploaded_file($tmp_name, $target_path)) {
		$result = file_upload($username, $name, $size, $type, $description, $target_path);
		if ($result) {			
			$_SESSION['name'] = $name;
			include '../views/upload_true.php';
		}
		else { 
			include '../views/upload_false_query.php';
		}		
	}	
	
?>
	
