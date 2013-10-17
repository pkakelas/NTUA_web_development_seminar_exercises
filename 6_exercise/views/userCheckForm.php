<?php

	function userCheck() { ?>
	
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">	
			<?php 
				include 'views/head.php';
			?>
			<body>
				<?php
					include 'views/title.php'; 
				?>
				<div id='sign_in'>
					<h2> Already a Boom Uploader user ?</h2>
					<p> What are you waiting for? Sign in to continue your journey !  </p>
					<form class="index-forms" action="index.php?resource=user&method=signin" method="post"> 
						<p>	Username <input id="Username2" type="text" name="username2" /> </p>
						<p>	Password <input id="Password2" type="password" name="password2" /> </p> 
						<p><input id="submit2" type="submit" value="Sign In" /> </p>
					</form>
				</div>
				<div id='footer' > 
					<p> Created by Dimitris Lamprinos. All rights reserved. </p>	
				</div>
			</body>
		</html>

<?php	} 

	userCheck();

?>
