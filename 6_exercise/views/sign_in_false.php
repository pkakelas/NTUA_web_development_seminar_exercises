<?php

	function view_sign_in_false() { ?>

		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">	
			<?php 
				include '../views/head.php';
			?>
			<body>
				<?php
					include '../views/title.php';
				?>
					<p> I am afraid your Credentials could not be verified. Please make sure that:</p>
					<ol>
						<li> you have already registered  </li>
						<li> you haven't mispelled your username or your password</li>
					</ol>
					<p> please <a href="../controllers/index.php">Try again</a></p>
					<p>If the problem continues, please contact me: pkakelas@gmail.com </p>
			
				<?php
					include '../views/footer.php'; 
				?>
			</body>
		</html>

<?php } 

	view_sign_in_false();

?>
