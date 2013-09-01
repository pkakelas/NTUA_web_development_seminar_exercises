<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<?php 
		include 'head.php';
		include 'sql.php';
		include 'sessions.php';
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
			$sql="INSERT INTO 
									`users` (`name` ,`surname` ,`age` ,`username` ,`password` ,`email`)
						VALUES
									( '$name',  '$surname',  '$age',  '$username',  '$password',  '$email' )";		
			if($con->connect_errno > 0){
				die('Unable to connect to database [' . $db->connect_error . ']');
			}
			if( $name == "" || $surname == "" || $age == "" 
			|| $password == "" || $username == "" || $email == "") {
				echo "Please fill in all forms.";
			} 	
			else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			 ?>
				<p>E-mail is not valid.Click <a href="index.php"> here</a> to visit the Boom Uploader starting page </p>
			<?php
			}  
			else if ($_POST['age']<13) {
				application_error("<p id='error'> $name I'm afraid you are to young to register to Boom Uploader..
				Wait some years, until you are 13 and then discover the imagine world of  Boom Uploader !! 
				Click <a href=index.php> here</a> to visit the Boom Uploader starting page </p>");
			} 
			else if (!mysqli_query($con, $sql)) {
				application_error("There was an error running the query");
			} 
			else { 
			?>	
				<p> Good Job! From now on you are a "boom uploder" user. Click <a href="home.php">here </a> to begin your journey </p> 
			<?php
				$_SESSION['username'] = $username;
			}
			include 'footer.php';
		?>	
	</body>
</html>
	