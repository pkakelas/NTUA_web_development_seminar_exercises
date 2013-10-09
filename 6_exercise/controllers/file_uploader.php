<?php 
		
	function controller_file_uploader($filename, $username, $description, $tmp_name, $size, $type) {
		include '../models/data.php';
		include '../models/sessions.php';
		include '../controllers/file_upload_functions.php';
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
	}

	Controller_file_uploader($_FILES['file']['name'], $_SESSION['username'], $_POST['description'], $_FILES['file']['tmp_name'],  $_FILES['file']['size'], $_FILES['file']['type']);

?>
	
