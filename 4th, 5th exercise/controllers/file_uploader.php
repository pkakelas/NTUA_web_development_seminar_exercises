<?php 
	include '..\models\sessions.php';
	include '..\models\upload_query.php';
	$_FILES['file']['name'] = strtolower($_FILES['file']['name']) ;
	$_FILES['file']['name'] = preg_replace("/[\s-]+/", " ", $_FILES['file']['name']) ;
	$_FILES['file']['name'] = preg_replace("/[\s_]/", "-", $_FILES['file']['name']) ;
	$name = $_FILES['file']['name'] ; 
	$username = $_SESSION['username'] ;
	$description = $_POST['description'] ; 
	$size = $_FILES['file']['size'] ;
	$type = $_FILES["file"]["type"] ;
	$target_path = "C:/test/$name" ;
	if (file_exists("C:/test/$name")) {
		header('Location: ..\views\upload_false_exists.php');
	}
	else if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
		$result = file_upload($username, $name, $size, $type, $description, $target_path);
		if($result==1) {			
			$_SESSION['name'] = $name;
			header('Location: ..\views\upload_true.php');
		}
		else { 
			header('Location: ..\views\upload_false_query.php');
		}		
	}	
?>
	
