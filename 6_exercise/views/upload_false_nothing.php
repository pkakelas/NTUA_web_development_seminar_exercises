<?php

	function view_upload_false_nothing() { ?>

		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">	
			<?php 
				include '../views/head.php';
			?>
			<body>
				<?php
					include '../views/title.php';
				?>
					<p> You haven't chosen any files yet.</p>
					<p> Click <a href="../controllers/home.php">here</a> to try again </p>
				<?php
					include '../views/footer.php'; 
				?>
			</body>
		</html>

<?php } 

	view_upload_false_nothing();

?>
