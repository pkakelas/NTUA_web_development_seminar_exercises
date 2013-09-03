<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<?php 
		include 'head.php';
	 ?>
	<body>
		<?php   
			include 'title.php';
			$name=$_POST['name'];
			$surname=$_POST['surname'];
			$age=$_POST['age'];
			$password=$_POST['password'];
			$username=$_POST['username'];
			$email=$_POST['email'];  
			include 'register_restrictions.php';
			include 'register_query.php';
			include 'footer.php';
		?>	
	</body>
</html>
	