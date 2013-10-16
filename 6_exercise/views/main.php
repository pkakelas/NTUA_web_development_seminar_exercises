<?php

	function mainView() { ?>
		
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">	
			<?php 
				include 'views/head.php'
			?>
			<body>
				<?php
					include 'views/title.php' 
				?>
				<p id='description'> Thank you for visiting my beautiful site. Here you easily upload whatever you want to share. Furthermore, you can check out whatever other users upload and download them without any cost at all. </p>
				<a id="registerlink" href="index.php?resource=userCreateView&method=create">Click Here to register</a>
				<a id="signinlink" href="index.php?resource=userCheckView&method=read">Click Here to sign in</a>
				<?php 
					include 'views/footer.php'
				?>
			</body>
		</html>

<?php }

	mainView();

?>
