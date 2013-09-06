<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">	
	<?php 
		include 'C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\models\sessions.php';
		include 'C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\views\head.php';
		$name = $_SESSION['name'];
	?>
	<body>
		<?php
			include 'C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\views\title.php';
			echo "<p> The file $name has been uploaded </p>" ;
			include 'C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\views\footer.php';
		?>
	</body>
</html>