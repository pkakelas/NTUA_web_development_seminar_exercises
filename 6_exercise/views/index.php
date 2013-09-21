<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">	
<?php 
	include '../views/head.php'
?>
	<body>
		<?php
			include '../views/title.php' 
		?>
		<p id='description'> Thank you for visiting my beautiful site. Here you easily upload whatever you want to share.
		Furthermore, you can check out whatever other users upload and download them without any cost at all. </p>
		<div id='register'>
			<h2> First Time visiting my site ? </h2>
			<p> Register and get ready to become the most famous Uploader of my site ! </p>
			<form  class="index-forms"  action="../controllers/register.php" method="post"> 
				<p>	What is your name ? <input id="name" type="text" name="name" /> </p>
				<p>	What is your surname ? <input  id="surname" type="text" name="surname" /> </p>
				<p>	How old are you ? <input id="age" type='text'  name="age" /> </p>
				<p>	What is your email ? <input  id="email" type="text" name="email" /> </p>
				<p>	Choose a username  <input id="username" type="text" name="username" /> </p>
				<p>	Choose a password  <input id="password" type="password" name="password" /> </p>
				<p>	<input  id="submit" type="submit" value="Register" /> </p>
			</form>
		</div>
		<div id='sign_in'>
			<h2> Already a Boom Uploader user ?</h2>
			<p> What are you waiting for? Sign in to continue your journey !  </p>
			<form class="index-forms" action="../controllers/sign_in.php" method="post"> 
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

	
	
	
		