<?php
	
	function view_upload_true($name) { ?>
	
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">	
			<?php 
				include '../models/sessions.php';
				include '../views/head.php';
			?>
			<body>
				<?php
					include '../views/title.php';
					echo "<p> The file $name has been uploaded. Click <a href='../views/home.php'> here </a> to go to the previous page. </p>" ;
					include '../views/footer.php';
				?>
			</body>
		</html>

<?php } 

	view_upload_true($_SESSION['name']);

?>
