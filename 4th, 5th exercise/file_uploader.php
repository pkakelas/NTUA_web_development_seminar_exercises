<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php 
	include 'sessions.php';
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<?php 
		include 'head.php';
	 ?>
	 <body>
		<?php 
			include 'title.php' ;
			include 'sql.php' ;
			$_FILES['file']['name'] = strtolower($_FILES['file']['name']) ;
			$_FILES['file']['name'] = preg_replace("/[\s-]+/", " ", $_FILES['file']['name']) ;
			$_FILES['file']['name'] = preg_replace("/[\s_]/", "-", $_FILES['file']['name']) ;
			$name = $_FILES['file']['name'] ; 
			$username = $_SESSION['username'] ;
			$description = $_POST['description'] ; 
			$size = $_FILES['file']['size'] ;
			$type = $_FILES["file"]["type"] ;
			$target_path = "C:/test/$name" ;
			$sql="INSERT INTO 
							`data` (`user`, `filename` ,`filesize` ,`filetype` ,`description` ,`saved`)
						VALUES
							( '$username',  '$name',  '$size',  '$type',  '$description',  '$target_path' )";	 
			if (file_exists("C:/test/$name")) {
				header('Location: upload_false_exists.php');
			}
			else if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
				mysqli_query($con,$sql) ;
			}
			include 'upload_query.php';
			if ($upload==1) {
				header('Location: upload_true.php');
			}
			else{ 
				header('Location: upload_false_query.php');
			}
				
			
		?>
	</body>
</html>