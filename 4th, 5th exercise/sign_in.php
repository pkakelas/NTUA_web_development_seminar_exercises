<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php 
	include 'sessions.php'
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<?php 
		include 'head.php' ;
		include 'sql.php' ;
	 ?>
	 <body>
		<h1> Booooooooom Uploader. Share everything you want!  </h1>
		<?php 
			$username = $_POST["username2"]; 
			$password = $_POST["password2"]; 
			$sql="SELECT name FROM users WHERE username='$username' and password='$password'";
			if($con->connect_errno > 0){
				application_error('Unable to connect to database [' . $db->connect_error . ']');
			}
			else if(!$result = $con->query($sql)){
				application_error('There was an error running the query [' . $con->error . ']');
			}		
			$row=mysqli_fetch_array($result);
			$count=mysqli_num_rows($result);
			if($count>0) {
				$_SESSION['username']=$username;
			?>
				<p>Welcome back  . Click <a href="home.php">here </a> to begin your journey </p>
			<?php
			}
			else {
				echo " <p>Your Login Name or Password is invalid. Please <a href='index.php'> try again </a>  <p> ";
			}
		?>
		<div id='footer' > 
			<p> Created by Dimitris Lamprinos. All rights reserved. </p>
		</div>
	</body>
</html>	