<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">	
	<?php 
		include '../views/head.php';
	?>
	<body>
		<?php
			include '../views/title.php';
		?>
			<p> I am afraid your Credentials didn't match. Please make sure that:</p>
			<ol>
				<li> You have already register in Boom Uploader </li>
				<li> You haven't mispelled your username or your password</li>
			</ol>
			<p> Please <a href = "../controllers/index.php">Try again</a></p>
			<p>If the problem continues please contact me: pkakelas@gmail.com </p>
			
		<?php
			include '../views/footer.php'; 
		?>
	</body>
</html>